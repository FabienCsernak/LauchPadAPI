<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agencies;

class AgenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Agencies::create([
            'name' => 'NASA',
            'country' => 'USA',
            'creation' => 1958,
            'description' => 'National Aeronautics and Space Administration'
        ]);

        Agencies::create([
            'name' => 'ESA',
            'country' => 'Europe',
            'creation' => 1975,
            'description' => 'European Space Agency'
        ]);

        Agencies::create([
            'name' => 'Roscosmos',
            'country' => 'Russia',
            'creation' => 1992,
            'description' => 'Russian Federal Space Agency'
        ]);

        Agencies::create([
            'name' => 'CNSA',
            'country' => 'China',
            'creation' => 1993,
            'description' => 'China National Space Administration'
        ]);

        Agencies::create([
            'name' => 'ISRO',
            'country' => 'India',
            'creation' => 1969,
            'description' => 'Indian Space Research Organisation'
        ]);

        Agencies::create([
            'name' => 'JAXA',
            'country' => 'Japan',
            'creation' => 2003,
            'description' => 'Japan Aerospace Exploration Agency'
        ]);

        Agencies::create([
            'name' => 'CSA',
            'country' => 'Canada',
            'creation' => 1989,
            'description' => 'Canadian Space Agency'
        ]);

        Agencies::create([
            'name' => 'SpaceX',
            'country' => 'USA',
            'creation' => 2002,
            'description' => 'Space Exploration Technologies Corp.'
        ]);

        Agencies::create([
            'name' => 'Firefly Aerospace',
            'country' => 'USA',
            'creation' => 2017,
            'description' => 'Firefly Aerospace, Inc.'
        ]);

        Agencies::create([
            'name' => 'ULA',
            'country' => 'USA',
            'creation' => 2006,
            'description' => 'United Launch Alliance'
        ]);

        Agencies::create([
            'name' => 'Rocket Lab',
            'country' => 'New Zealand',
            'creation' => 2006,
            'description' => 'Rocket Lab USA, Inc.'
        ]);
    }
}
