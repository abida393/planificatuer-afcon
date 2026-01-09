<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\TouristSpot;
use Illuminate\Database\Seeder;

class TouristSpotSeeder extends Seeder
{
    public function run(): void
    {
        $spots = [
            'Casablanca' => [
                ['name' => 'Hassan II Mosque', 'description' => 'A colossal mosque built partly over the sea.', 'image' => '/images/spots/hassan_ii.jpg'],
                ['name' => 'Corniche', 'description' => 'Beachfront district with clubs and restaurants.', 'image' => '/images/spots/corniche.jpg'],
            ],
            'Rabat' => [
                ['name' => 'Hassan Tower', 'description' => 'The minaret of an incomplete mosque.', 'image' => '/images/spots/hassan_tower.jpg'],
                ['name' => 'Kasbah of the Udayas', 'description' => 'A picturesque place with blue and white houses.', 'image' => '/images/spots/udayas.jpg'],
            ],
            'Marrakech' => [
                ['name' => 'Jemaa el-Fnaa', 'description' => 'A famous square and market place.', 'image' => '/images/spots/jemaa_el_fnaa.jpg'],
                ['name' => 'Majorelle Garden', 'description' => 'A two-and-a-half acre botanical garden.', 'image' => '/images/spots/majorelle.jpg'],
            ],
            'Tangier' => [
                ['name' => 'Hercules Caves', 'description' => 'Archaeological cave complex.', 'image' => '/images/spots/hercules_caves.jpg'],
                ['name' => 'Cape Spartel', 'description' => 'A promontory in Morocco about 1,000 feet above sea level.', 'image' => '/images/spots/cape_spartel.jpg'],
            ],
        ];

        foreach ($spots as $cityName => $citySpots) {
            $city = City::where('name', $cityName)->first();
            if ($city) {
                foreach ($citySpots as $spot) {
                    TouristSpot::firstOrCreate(
                        ['name' => $spot['name']],
                        [
                            'city_id' => $city->id,
                            'description' => $spot['description'],
                            'image' => $spot['image'],
                        ]
                    );
                }
            }
        }
    }
}
