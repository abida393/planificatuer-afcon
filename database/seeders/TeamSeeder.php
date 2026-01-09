<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            // Group A
            ['name' => 'Morocco', 'fifa_rank' => 13, 'group_name' => 'A', 'flag_url' => '/images/flags/morocco.png'],
            ['name' => 'DR Congo', 'fifa_rank' => 67, 'group_name' => 'A', 'flag_url' => '/images/flags/drc.png'],
            ['name' => 'Zambia', 'fifa_rank' => 84, 'group_name' => 'A', 'flag_url' => '/images/flags/zambia.png'],
            ['name' => 'Tanzania', 'fifa_rank' => 121, 'group_name' => 'A', 'flag_url' => '/images/flags/tanzania.png'],
            
            // Group B
            ['name' => 'Egypt', 'fifa_rank' => 33, 'group_name' => 'B', 'flag_url' => '/images/flags/egypt.png'],
            ['name' => 'Ghana', 'fifa_rank' => 61, 'group_name' => 'B', 'flag_url' => '/images/flags/ghana.png'],
            ['name' => 'Cape Verde', 'fifa_rank' => 73, 'group_name' => 'B', 'flag_url' => '/images/flags/cape_verde.png'],
            ['name' => 'Mozambique', 'fifa_rank' => 111, 'group_name' => 'B', 'flag_url' => '/images/flags/mozambique.png'],

            // Group C (Senegal, Cameroon, Guinea, Gambia)
             ['name' => 'Senegal', 'fifa_rank' => 20, 'group_name' => 'C', 'flag_url' => '/images/flags/senegal.png'],
             ['name' => 'Cameroon', 'fifa_rank' => 46, 'group_name' => 'C', 'flag_url' => '/images/flags/cameroon.png'],
             ['name' => 'Guinea', 'fifa_rank' => 80, 'group_name' => 'C', 'flag_url' => '/images/flags/guinea.png'],
             ['name' => 'Gambia', 'fifa_rank' => 126, 'group_name' => 'C', 'flag_url' => '/images/flags/gambia.png'],

             // Group D (Algeria, Burkina Faso, Mauritania, Angola)
             ['name' => 'Algeria', 'fifa_rank' => 30, 'group_name' => 'D', 'flag_url' => '/images/flags/algeria.png'],
             ['name' => 'Burkina Faso', 'fifa_rank' => 57, 'group_name' => 'D', 'flag_url' => '/images/flags/burkina_faso.png'],
             ['name' => 'Mauritania', 'fifa_rank' => 105, 'group_name' => 'D', 'flag_url' => '/images/flags/mauritania.png'],
             ['name' => 'Angola', 'fifa_rank' => 117, 'group_name' => 'D', 'flag_url' => '/images/flags/angola.png'],
             
             // Group E (Tunisia, Mali, South Africa, Namibia)
             ['name' => 'Tunisia', 'fifa_rank' => 28, 'group_name' => 'E', 'flag_url' => '/images/flags/tunisia.png'],
             ['name' => 'Mali', 'fifa_rank' => 51, 'group_name' => 'E', 'flag_url' => '/images/flags/mali.png'],
             ['name' => 'South Africa', 'fifa_rank' => 66, 'group_name' => 'E', 'flag_url' => '/images/flags/south_africa.png'],
             ['name' => 'Namibia', 'fifa_rank' => 115, 'group_name' => 'E', 'flag_url' => '/images/flags/namibia.png'],

             // Group F (Ivory Coast, Nigeria, Equatorial Guinea, Guinea-Bissau) - wait, Ivory Coast was host in 2023.
             // Using some generic realistic groups for 2025 if specific draw isn't known, or copying 2023 structure for seed.
             ['name' => 'Ivory Coast', 'fifa_rank' => 49, 'group_name' => 'F', 'flag_url' => '/images/flags/ivory_coast.png'],
             ['name' => 'Nigeria', 'fifa_rank' => 42, 'group_name' => 'F', 'flag_url' => '/images/flags/nigeria.png'],
             ['name' => 'Equatorial Guinea', 'fifa_rank' => 88, 'group_name' => 'F', 'flag_url' => '/images/flags/equatorial_guinea.png'],
             ['name' => 'Guinea-Bissau', 'fifa_rank' => 103, 'group_name' => 'F', 'flag_url' => '/images/flags/guinea_bissau.png'],
        ];

        foreach ($teams as $team) {
            Team::firstOrCreate(['name' => $team['name']], $team);
        }
    }
}
