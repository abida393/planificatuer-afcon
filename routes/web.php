<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MatchController;

Route::get('/api/matches', [MatchController::class, 'getMatches']);

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::post('/generate-plan', function (Request $request) {
    $team = $request->input('team');
    $budget = $request->input('budget_tier', 'mid');

    try {
        // Proxy to the Python Agent running on port 8001
        $response = \Illuminate\Support\Facades\Http::post('http://127.0.0.1:8001/generate-plan', [
            'team' => $team,
            'budget_tier' => $budget,
        ]);

        if ($response->successful()) {
            return $response->json();
        } else {
            \Illuminate\Support\Facades\Log::error("Agent API Error: " . $response->body());
            return response()->json([
                'error' => 'Agent service returned error',
                'details' => $response->body()
            ], $response->status());
        }
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error("Agent Connection Error: " . $e->getMessage());
        return response()->json([
            'error' => 'Could not connect to agent service',
            'details' => 'Ensure the agent is running on port 8001'
        ], 500);
    }
});

Route::post('/chat-webhook', function (Request $request) {
    try {
        // STEP 1: Get Prediction Skeleton from Python Agent
        // We use the Python agent for the "Truth" of the schedule (Opponents, Dates, Stadiums)
        try {
            $pythonResponse = \Illuminate\Support\Facades\Http::post('http://127.0.0.1:8001/generate-plan', [
                'team' => $request->input('team'),
                'budget_tier' => $request->input('budget_tier')
            ]);
            
            $pythonData = $pythonResponse->successful() ? $pythonResponse->json() : null;
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Python Agent Failed: " . $e->getMessage());
            $pythonData = null;
        }

        // STEP 2: Get Rich Details from n8n AI Agent
        // We use n8n for "Flavor" (Hotels, Costs, Activities)
        $n8nResponse = \Illuminate\Support\Facades\Http::post('http://localhost:5678/webhook/e7fbefd4-8971-4378-ac63-d943cd0194b7', $request->all());
        
        $aiDetails = [];
        if ($n8nResponse->successful()) {
            $n8nData = $n8nResponse->json();
            if (isset($n8nData[0]['text'])) {
                 $parsed = json_decode($n8nData[0]['text'], true);
                 if (json_last_error() === JSON_ERROR_NONE) {
                     $aiDetails = $parsed['itinerary_analysis'] ?? [];
                 }
            }
        }

        // Fallback: If Python agent failed, rely entirely on n8n (mapped to old format)
        if (!$pythonData) {
            return response()->json([
                'error' => 'Prediction Engine unavailable',
                'details' => 'Could not connect to Python Agent'
            ], 503); 
            // Alternatively, we could fallback to pure n8n here, but user asked for "predictions from api agent"
        }

        // STEP 3: The Merge
        // Master = Python Data
        // Servant = n8n Data
        
        $mergedItinerary = [];
        foreach ($pythonData['itinerary'] as $index => $stop) {
            $mergedStop = $stop; // Start with Python data
            
            // Find matching detail from AI
            // Strategy: Match by City name first, then just grab the indexed one if close enough
            $enrichment = null;
            
            // Try 1: Exact City Match
            foreach ($aiDetails as $detail) {
                if (isset($detail['city']) && str_contains(strtolower($detail['city']), strtolower($stop['city']))) {
                    $enrichment = $detail;
                    break;
                }
            }
            
            // Try 2: If no city match, try to use index (assuming flow is similar)
            if (!$enrichment && isset($aiDetails[$index])) {
                $enrichment = $aiDetails[$index];
            }

            // Apply Enrichment
            if ($enrichment) {
                // Add Budget Breakdown
                if (isset($enrichment['budget_split'])) {
                    $mergedStop['costs'] = [
                        'total' => array_sum($enrichment['budget_split']),
                        'breakdown' => $enrichment['budget_split']
                    ];
                    $mergedStop['estimated_cost'] = $mergedStop['costs']['total']; // Override simple cost
                }
                
                // Add Recommendations
                if (isset($enrichment['recommendations'])) {
                    $placeList = $enrichment['recommendations']['places'] ?? [];
                    $mustVisit = [];
                    foreach($placeList as $place) {
                        $mustVisit[] = [
                            'name' => $place, 
                            'category' => 'Recommended',
                            'description' => 'Top rated by AI'
                        ];
                    }
                    $mergedStop['must_visit'] = $mustVisit;
                    
                    // Add Hotel to metadata
                    $hotel = $enrichment['recommendations']['hotel_name'] ?? 'Recommended Hotel';
                    $mergedStop['city_metadata']['description'] = "Stay at " . $hotel;
                    $mergedStop['stadium']['nearby_hotel'] = $hotel;
                }
            }

            $mergedItinerary[] = $mergedStop;
        }

        // Refine Totals
        // Recalculate total cost based on enriched data
        $newTotal = 0;
        foreach ($mergedItinerary as $i) {
            $newTotal += ($i['costs']['total'] ?? $i['estimated_cost']);
        }

        return response()->json([
            'team' => $pythonData['team'],
            'prediction' => $pythonData['prediction'], // Python logic rules!
            'total_cost' => $newTotal,
            'currency' => $pythonData['currency'],
            'itinerary' => $mergedItinerary
        ]);

    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error("Hybrid Agent Error: " . $e->getMessage());
        return response()->json(['error' => 'Hybrid agent processing failed'], 500);
    }
});
