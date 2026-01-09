<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            [
                'name' => 'Casablanca',
                'description' => 'The economic capital and largest city of Morocco.',
                'image' => '/images/cities/casablanca.jpg',
                'daily_budget_usd' => 50,
                'daily_mid_usd' => 120,
                'daily_luxury_usd' => 300,
            ],
            [
                'name' => 'Rabat',
                'description' => 'The capital city of Morocco, known for its landmarks.',
                'image' => '/images/cities/rabat.jpg',
                'daily_budget_usd' => 60,
                'daily_mid_usd' => 130,
                'daily_luxury_usd' => 320,
            ],
            [
                'name' => 'Marrakech',
                'description' => 'A major city of the Kingdom of Morocco.',
                'image' => '/images/cities/marrakech.jpg',
                'daily_budget_usd' => 55,
                'daily_mid_usd' => 140,
                'daily_luxury_usd' => 350,
            ],
            [
                'name' => 'Tangier',
                'description' => 'A major city in northwestern Morocco.',
                'image' => '/images/cities/tangier.jpg',
                'daily_budget_usd' => 50,
                'daily_mid_usd' => 110,
                'daily_luxury_usd' => 280,
            ],
            [
                'name' => 'Agadir',
                'description' => 'A major city in mid-southern Morocco.',
                'image' => '/images/cities/agadir.jpg',
                'daily_budget_usd' => 45,
                'daily_mid_usd' => 100,
                'daily_luxury_usd' => 250,
            ],
            [
                'name' => 'Fez',
                'description' => 'The second largest city of Morocco.',
                'image' => '/images/cities/fez.jpg',
                'daily_budget_usd' => 40,
                'daily_mid_usd' => 90,
                'daily_luxury_usd' => 200,
            ],
        ];

        foreach ($cities as $city) {
            City::firstOrCreate(['name' => $city['name']], $city);
        }
    }
}
