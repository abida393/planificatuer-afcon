<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            TeamSeeder::class,
            StadiumSeeder::class,
            MatchSeeder::class,
            TouristSpotSeeder::class,
            UserSeeder::class,
        ]);
    }
}
