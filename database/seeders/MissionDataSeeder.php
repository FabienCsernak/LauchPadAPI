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
            'agency_id' => 1,
            'count_mission' => 20,
            'mission_succes' => 15,
            'mission_faillure' => 3,
            'mission_partial_faillure' => 2,
        ]);

        MissionData::create([
            'agency_id' => 2,
            'count_mission' => 15,
            'mission_succes' => 12,
            'mission_faillure' => 2,
            'mission_partial_faillure' => 1,
        ]);
    }
}
