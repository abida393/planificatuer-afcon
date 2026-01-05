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

    // Use absolute path to python executable to avoid environment issues in artisan serve
    // Path captured from verification step
    $pythonPath = 'C:\Users\USER\AppData\Local\Programs\Python\Python312\python.exe';
    $scriptPath = base_path('python_agent/agent.py');

    // Execute Python Agent
    $process = new \Symfony\Component\Process\Process([$pythonPath, $scriptPath, '--team', $team, '--budget', $budget]);
    $process->setWorkingDirectory(base_path());
    $process->setEnv([
        'SystemRoot' => getenv('SystemRoot'),
        'PATH' => getenv('PATH'),
        'TEMP' => getenv('TEMP'),
        'TMP' => getenv('TMP'),
    ]);
    $process->run();

    // Check if the process ran successfully
    if (!$process->isSuccessful()) {
        $errorOutput = $process->getErrorOutput();
        \Illuminate\Support\Facades\Log::error("Python Agent Failed: " . $errorOutput);

        return response()->json([
            'error' => 'Agent execution failed',
            'details' => $errorOutput,
            'output' => $process->getOutput()
        ], 500);
    }

    $output = $process->getOutput();

    // Parse the JSON output from the Python script
    $jsonOutput = json_decode($output, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        \Illuminate\Support\Facades\Log::error("Python Agent Invalid JSON: " . $output);
        return response()->json([
            'error' => 'Invalid JSON from agent',
            'raw_output' => $output
        ], 500);
    }

    return response()->json($jsonOutput);
});
