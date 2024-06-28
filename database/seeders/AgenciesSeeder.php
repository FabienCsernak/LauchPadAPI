<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agencies;

class AgenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */public function run()
    {
        agencies::create([
            'name' => 'NASA',
            'country' => 'USA',
            'creation' => 1958,
            'description' => 'National Aeronautics and Space Administration'
        ]);

        agencies::create([
            'name' => 'ESA',
            'country' => 'Europe',
            'creation' => 1975,
            'description' => 'European Space Agency'
        ]);

        // Ajoutez d'autres entrées selon vos besoins
    }
}
