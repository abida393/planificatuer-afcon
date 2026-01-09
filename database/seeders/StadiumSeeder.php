<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Stadium;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    public function run(): void
    {
        $stadiums = [
            'Casablanca' => ['name' => 'Mohammed V Stadium', 'capacity' => 67000],
            'Rabat' => ['name' => 'Prince Moulay Abdellah Stadium', 'capacity' => 53000],
            'Marrakech' => ['name' => 'Marrakesh Stadium', 'capacity' => 45240],
            'Tangier' => ['name' => 'Ibn Batouta Stadium', 'capacity' => 65000],
            'Agadir' => ['name' => 'Adrar Stadium', 'capacity' => 45480],
            'Fez' => ['name' => 'Fez Stadium', 'capacity' => 45000],
        ];

        foreach ($stadiums as $cityName => $stadiumData) {
            $city = City::where('name', $cityName)->first();
            if ($city) {
                Stadium::firstOrCreate(
                    ['name' => $stadiumData['name']],
                    [
                        'city_id' => $city->id,
                        'capacity' => $stadiumData['capacity']
                    ]
                );
            }
        }
    }
}
