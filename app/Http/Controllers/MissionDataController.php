<?php

namespace App\Http\Controllers;

use App\Models\MissionData;
use Illuminate\Http\Request;

class MissionDataController extends Controller
{
    public function index()
    {
        return MissionData::all();
    }

    public function show($id)
    {
        return MissionData::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'launcher_id' => 'required|integer',
            'count_mission' => 'required|integer',
            'mission_success' => 'required|integer',
            'mission_failure' => 'required|integer',
            'mission_partial_failure' => 'required|integer',
        ]);

        return MissionData::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $missionData = MissionData::findOrFail($id);

        $request->validate([
            'launcher_id' => 'required|integer',
            'count_mission' => 'required|integer',
            'mission_success' => 'required|integer',
            'mission_failure' => 'required|integer',
            'mission_partial_failure' => 'required|integer',
        ]);

        $missionData->update($request->all());

        return $missionData;
    }

    public function destroy($id)
    {
        return MissionData::destroy($id);
    }
}
