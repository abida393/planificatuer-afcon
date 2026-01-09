<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Stadium;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MatchSeeder extends Seeder
{
    public function run(): void
    {
        // Example fixtures. We'll pick some teams and stadiums.
        
        $morocco = Team::where('name', 'Morocco')->first();
        $drc = Team::where('name', 'DR Congo')->first();
        $zambia = Team::where('name', 'Zambia')->first();
        $tanzania = Team::where('name', 'Tanzania')->first();

        // Stadiums
        $rabatStadium = Stadium::where('name', 'Prince Moulay Abdellah Stadium')->first();
        $marrakechStadium = Stadium::where('name', 'Marrakesh Stadium')->first();

        if ($morocco && $drc && $rabatStadium) {
            Game::firstOrCreate(
                [
                    'team_1_id' => $morocco->id,
                    'team_2_id' => $drc->id,
                    'match_date' => Carbon::create(2025, 1, 15, 20, 0, 0),
                ],
                [
                    'stadium_id' => $rabatStadium->id,
                    'stage' => 'Group Stage',
                ]
            );
        }

        if ($zambia && $tanzania && $marrakechStadium) {
             Game::firstOrCreate(
                [
                    'team_1_id' => $zambia->id,
                    'team_2_id' => $tanzania->id,
                    'match_date' => Carbon::create(2025, 1, 16, 17, 0, 0),
                ],
                [
                    'stadium_id' => $marrakechStadium->id,
                    'stage' => 'Group Stage',
                ]
            );
        }
        
        // Add more dummy matches
        $senegal = Team::where('name', 'Senegal')->first();
        $cameroon = Team::where('name', 'Cameroon')->first();
        $casablancaStadium = Stadium::where('name', 'Mohammed V Stadium')->first();

        if ($senegal && $cameroon && $casablancaStadium) {
             Game::firstOrCreate(
                [
                    'team_1_id' => $senegal->id,
                    'team_2_id' => $cameroon->id,
                    'match_date' => Carbon::create(2025, 1, 17, 20, 0, 0),
                ],
                [
                    'stadium_id' => $casablancaStadium->id,
                    'stage' => 'Group Stage',
                ]
            );
        }
    }
}
