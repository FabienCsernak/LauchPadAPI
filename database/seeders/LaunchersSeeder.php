<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Launchers;

class LaunchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Launchers::create([
            'agency_id' => 1,
            'name' => 'Falcon 9',
            'description' => 'Falcon 9 is a two-stage rocket',
            'status' => true,
            'price' => 69750000,
            'diameter' => 3.7,
            'height' => 70,
            'LEO' => 22800,
            'GTO' => 8300,
            'stage' => 2,
            'liftoff_thrust' => 7607
        ]);

        Launchers::create([
            'agency_id' => 2,
            'name' => 'Ariane 5',
            'description' => 'Ariane 5 is a heavy-lift rocket',
            'price' => 200000000,
            'status' => false,
            'diameter' => 5.4,
            'height' => 53,
            'LEO' => 21000,
            'GTO' => 10500,
            'stage' => 2,
            'liftoff_thrust' => 15120
        ]);

        // Ajoutez d'autres entrées selon vos besoins
    }
}
