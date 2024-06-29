<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Launcher;

class LaunchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // NASA
        Launcher::create([
            'agency_id' => 1,
            'name' => 'Space Shuttle',
            'description' => 'Reusable spacecraft',
            'status' => false,
            'price' => 450000000,
            'diameter' => 8.7,
            'height' => 56.1,
            'LEO' => 27500,
            'GTO' => 3810,
            'stage' => 2,
            'liftoff_thrust' => 30250
        ]);

        Launcher::create([
            'agency_id' => 1,
            'name' => 'Saturn V',
            'description' => 'Rocket used in the Apollo missions',
            'status' => false,
            'price' => 1160000000,
            'diameter' => 10.1,
            'height' => 110.6,
            'LEO' => 140000,
            'GTO' => 48200,
            'stage' => 3,
            'liftoff_thrust' => 35100
        ]);

        Launcher::create([
            'agency_id' => 1,
            'name' => 'SLS',
            'description' => 'Space Launch System is an American super heavy-lift expendable launch vehicle',
            'status' => true,
            'price' => 876000000,
            'diameter' => 8.4,
            'height' => 98.1,
            'LEO' => 95000,
            'GTO' => 27000,
            'stage' => 2,
            'liftoff_thrust' => 39440
        ]);

        // ESA
        Launcher::create([
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

        Launcher::create([
            'agency_id' => 2,
            'name' => 'Vega',
            'description' => 'Small lift launch vehicle',
            'status' => true,
            'price' => 37000000,
            'diameter' => 3.0,
            'height' => 29.9,
            'LEO' => 1436,
            'GTO' => null,
            'stage' => 4,
            'liftoff_thrust' => 2200
        ]);

        // Roscosmos
        Launcher::create([
            'agency_id' => 3,
            'name' => 'Soyuz',
            'description' => 'Russian expendable launch system',
            'status' => true,
            'price' => 17420000,
            'diameter' => 10.3,
            'height' => 51.38,
            'LEO' => 7220,
            'GTO' => 3250,
            'stage' => 3,
            'liftoff_thrust' => 4550
        ]);

        // CNSA
        Launcher::create([
            'agency_id' => 4,
            'name' => 'Long March 5B',
            'description' => 'Chinese expendable launch system',
            'status' => true,
            'price' => null,
            'diameter' => 5.2,
            'height' => 53.66,
            'LEO' => 23000,
            'GTO' => null,
            'stage' => 2,
            'liftoff_thrust' => 10565
        ]);

        // ISRO
        Launcher::create([
            'agency_id' => 5,
            'name' => 'PSLV',
            'description' => 'Polar Satellite Launch Vehicle',
            'status' => true,
            'price' => 21000000,
            'diameter' => 3.2,
            'height' => 44,
            'LEO' => 3800,
            'GTO' => 1425,
            'stage' => 4,
            'liftoff_thrust' => 4847
        ]);

        // JAXA
        Launcher::create([
            'agency_id' => 6,
            'name' => 'H-IIA 202',
            'description' => 'Japanese expendable launch system',
            'status' => true,
            'price' => 90000000,
            'diameter' => 4,
            'height' => 53,
            'LEO' => 10000,
            'GTO' => 4100,
            'stage' => 2,
            'liftoff_thrust' => 9800
        ]);

        // SpaceX
        Launcher::create([
            'agency_id' => 8,
            'name' => 'Falcon 1',
            'description' => 'Falcon 1 was the first privately developed liquid-fueled rocket to reach orbit',
            'status' => false,
            'price' => 7000000,
            'diameter' => 1.68,
            'height' => 22.25,
            'LEO' => 470,
            'GTO' => 0,
            'stage' => 2,
            'liftoff_thrust' => 343
        ]);

        Launcher::create([
            'agency_id' => 8,
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

        Launcher::create([
            'agency_id' => 8,
            'name' => 'Falcon Heavy',
            'description' => 'Heavy-lift launch vehicle',
            'status' => true,
            'price' => 97000000,
            'diameter' => 3.7,
            'height' => 70,
            'LEO' => 63800,
            'GTO' => 26700,
            'stage' => 2,
            'liftoff_thrust' => 22819
        ]);

        Launcher::create([
            'agency_id' => 8,
            'name' => 'Starship',
            'description' => 'Starship is a fully reusable spacecraft designed by SpaceX for interplanetary travel',
            'status' => true,
            'price' => null,
            'diameter' => 9,
            'height' => 121,
            'LEO' => 200000,
            'GTO' => null,
            'stage' => 2,
            'liftoff_thrust' => 74432
        ]);

        // Firefly Aerospace
        Launcher::create([
            'agency_id' => 9,
            'name' => 'Alpha',
            'description' => 'Small satellite launch vehicle',
            'status' => true,
            'price' => 15000000,
            'diameter' => 1.82,
            'height' => 29.48,
            'LEO' => 1030,
            'GTO' => 0,
            'stage' => 2,
            'liftoff_thrust' => 801
        ]);

        // ULA
        Launcher::create([
            'agency_id' => 10,
            'name' => 'Atlas V',
            'description' => 'Expendable launch system',
            'status' => true,
            'price' => 109000000,
            'diameter' => 3.81,
            'height' => 58.3,
            'LEO' => 9797,
            'GTO' => 4750,
            'stage' => 2,
            'liftoff_thrust' => 3827
        ]);

        Launcher::create([
            'agency_id' => 10,
            'name' => 'Delta IV Heavy',
            'description' => 'Heavy-lift launch vehicle',
            'status' => true,
            'price' => 350000000,
            'diameter' => 5.1,
            'height' => 71.6,
            'LEO' => 28370,
            'GTO' => 13810,
            'stage' => 2,
            'liftoff_thrust' => 9411
        ]);

        // Rocket Lab
        Launcher::create([
            'agency_id' => 11,
            'name' => 'Electron',
            'description' => 'Small satellite launch vehicle',
            'status' => true,
            'price' => 7500000,
            'diameter' => 1.2,
            'height' => 18,
            'LEO' => 320,
            'GTO' => 0,
            'stage' => 2,
            'liftoff_thrust' => 224
        ]);
    }
}
