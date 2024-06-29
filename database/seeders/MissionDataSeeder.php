<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MissionData;

class MissionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MissionData::create([
            'launcher_id' => 1, // Space Shuttle
            'count_mission' => 135,
            'mission_succes' => 133,
            'mission_failure' => 2,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 2, // Saturn V
            'count_mission' => 13,
            'mission_succes' => 12,
            'mission_failure' => 0,
            'mission_partial_failure' => 1,
        ]);
    
        MissionData::create([
            'launcher_id' => 3, // SLS
            'count_mission' => 1,
            'mission_succes' => 1,
            'mission_failure' => 0,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 4, // Ariane 5
            'count_mission' => 117,
            'mission_succes' => 112,
            'mission_failure' => 2,
            'mission_partial_failure' => 3,
        ]);
    
        MissionData::create([
            'launcher_id' => 5, // Vega
            'count_mission' => 23,
            'mission_succes' => 20,
            'mission_failure' => 3,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 6, // Soyuz
            'count_mission' => 1900,
            'mission_succes' => 1840,
            'mission_failure' => 20,
            'mission_partial_failure' => 40,
        ]);
    
        MissionData::create([
            'launcher_id' => 7, // Long March 5B
            'count_mission' => 4,
            'mission_succes' => 4,
            'mission_failure' => 0,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 8, // PSLV
            'count_mission' => 60,
            'mission_succes' => 57,
            'mission_failure' => 2,
            'mission_partial_failure' => 1,
        ]);
    
        MissionData::create([
            'launcher_id' => 9, // H-IIA 202
            'count_mission' => 48,
            'mission_succes' => 47,
            'mission_failure' => 1,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 10, // Falcon 1
            'count_mission' => 5,
            'mission_succes' => 2,
            'mission_failure' => 3,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 11, // Falcon 9
            'count_mission' => 352,
            'mission_succes' => 349,
            'mission_failure' => 2,
            'mission_partial_failure' => 1,
        ]);
    
        MissionData::create([
            'launcher_id' => 12, // Falcon Heavy
            'count_mission' => 10,
            'mission_succes' => 10,
            'mission_failure' => 0,
            'mission_partial_failure' => 0,
        ]);
    
        MissionData::create([
            'launcher_id' => 13, // Starship
            'count_mission' => 4,
            'mission_succes' => 2,
            'mission_failure' => 1,
            'mission_partial_failure' => 1,
        ]);
    
        MissionData::create([
            'launcher_id' => 14, // Alpha
            'count_mission' => 4,
            'mission_succes' => 1,
            'mission_failure' => 1,
            'mission_partial_failure' => 2,
        ]);
    
        MissionData::create([
            'launcher_id' => 15, // Atlas V
            'count_mission' => 100,
            'mission_succes' => 99,
            'mission_failure' => 0,
            'mission_partial_failure' => 1,
        ]);
    
        MissionData::create([
            'launcher_id' => 16, // Delta IV Heavy
            'count_mission' => 16,
            'mission_succes' => 15,
            'mission_failure' => 0,
            'mission_partial_failure' => 1,
        ]);
    
        MissionData::create([
            'launcher_id' => 17, // Electron
            'count_mission' => 50,
            'mission_succes' => 46,
            'mission_failure' => 4,
            'mission_partial_failure' => 0,
        ]);
    }
}
