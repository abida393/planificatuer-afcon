<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function getMatches()
    {
        // Mock Data for AFCON 2025
        // In a real scenario, this would call api.football-data.org

        $matches = [
            [
                'date' => 'Sunday, 21 Dec 2025',
                'is_completed' => true,
                'matches' => [
                    [
                        'id' => 1,
                        'group' => 'Group A',
                        'home_team' => 'Morocco',
                        'home_flag' => '🇲🇦',
                        'away_team' => 'Comoros',
                        'away_flag' => '🇰🇲',
                        'score_home' => 3,
                        'score_away' => 0,
                        'status' => 'FT',
                        'venue' => 'Prince Moulay Abdellah, Rabat'
                    ]
                ]
            ],
            [
                'date' => 'Monday, 22 Dec 2025',
                'is_completed' => true,
                'matches' => [
                    [
                        'id' => 2,
                        'group' => 'Group A',
                        'home_team' => 'Mali',
                        'home_flag' => '🇲🇱',
                        'away_team' => 'Zambia',
                        'away_flag' => '🇿🇲',
                        'score_home' => 1,
                        'score_away' => 1,
                        'status' => 'FT',
                        'venue' => 'Rabat'
                    ],
                    [
                        'id' => 3,
                        'group' => 'Group B',
                        'home_team' => 'South Africa',
                        'home_flag' => '🇿🇦',
                        'away_team' => 'Angola',
                        'away_flag' => '🇦🇴',
                        'score_home' => 2,
                        'score_away' => 0,
                        'status' => 'FT',
                        'venue' => 'Agadir'
                    ]
                ]
            ],
            [
                'date' => 'Tuesday, 23 Dec 2025',
                'is_today' => true,
                'matches' => [
                    [
                        'id' => 4,
                        'group' => 'Group D',
                        'home_team' => 'Senegal',
                        'home_flag' => '🇸🇳',
                        'away_team' => 'Botswana',
                        'away_flag' => '🇧🇼',
                        'time' => '14:00',
                        'status' => 'LIVE',
                        'score_home' => 1,
                        'score_away' => 0,
                        'venue' => 'Marrakech'
                    ],
                    [
                        'id' => 5,
                        'group' => 'Group C',
                        'home_team' => 'Nigeria',
                        'home_flag' => '🇳🇬',
                        'away_team' => 'Tanzania',
                        'away_flag' => '🇹🇿',
                        'time' => '17:00',
                        'status' => 'UPCOMING',
                        'venue' => 'Fez'
                    ],
                    [
                        'id' => 6,
                        'group' => 'Group C',
                        'home_team' => 'Tunisia',
                        'home_flag' => '🇹🇳',
                        'away_team' => 'Uganda',
                        'away_flag' => '🇺🇬',
                        'time' => '21:00',
                        'status' => 'UPCOMING',
                        'venue' => 'Fez'
                    ]
                ]
            ],
            [
                'date' => 'Wednesday, 24 Dec 2025',
                'matches' => [
                    [
                        'id' => 7,
                        'group' => 'Group E',
                        'home_team' => 'Burkina Faso',
                        'home_flag' => '🇧🇫',
                        'away_team' => 'Eq. Guinea',
                        'away_flag' => '🇬🇶',
                        'time' => '14:00',
                        'status' => 'SCHEDULED',
                        'venue' => 'Tangier'
                    ],
                    [
                        'id' => 8,
                        'group' => 'Group E',
                        'home_team' => 'Algeria',
                        'home_flag' => '🇩🇿',
                        'away_team' => 'Sudan',
                        'away_flag' => '🇸🇩',
                        'time' => '17:00',
                        'status' => 'SCHEDULED',
                        'venue' => 'Tangier'
                    ]
                ]
            ],
            [
                'date' => 'Thursday, 25 Dec 2025',
                'matches' => [
                    [
                        'id' => 9,
                        'group' => 'Group F',
                        'home_team' => 'Ivory Coast',
                        'home_flag' => '🇨🇮',
                        'away_team' => 'Mozambique',
                        'away_flag' => '🇲🇿',
                        'time' => '20:00',
                        'status' => 'SCHEDULED',
                        'venue' => 'Casablanca'
                    ]
                ]
            ]
        ];

        return response()->json($matches);
    }
}
