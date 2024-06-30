<?php

namespace App\Http\Controllers;

use App\Models\Launcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LauncherController extends Controller
{
    public function index()
    {
        return Launcher::all();
    }

    public function show($id)
    {
        return Launcher::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'agency_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'price' => 'nullable|numeric',
            'diameter' => 'required|numeric',
            'height' => 'required|numeric',
            'LEO' => 'required|integer',
            'GTO' => 'nullable|integer',
            'stage' => 'required|integer',
            'liftoff_thrust' => 'required|integer',
        ]);

        dd($request);

        return Launcher::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $launcher = Launcher::findOrFail($id);

        $request->validate([
            'agency_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'price' => 'nullable|numeric',
            'diameter' => 'required|numeric',
            'height' => 'required|numeric',
            'LEO' => 'required|integer',
            'GTO' => 'nullable|integer',
            'stage' => 'required|integer',
            'liftoff_thrust' => 'required|integer',
        ]);

        $launcher->update($request->all());

        return $launcher;
    }

    public function destroy($id)
    {
        return Launcher::destroy($id);
    }

    public function bestLaunchers()
    {
        $bestLaunchers = DB::table('mission_data')
            ->join('launchers', 'mission_data.launcher_id', '=', 'launchers.id')
            ->select(
                'launchers.id',
                'launchers.name',
                'launchers.agency_id',
                DB::raw('SUM(mission_data.mission_success + mission_data.mission_partial_failure) as total_successes'),
                DB::raw('SUM(mission_data.mission_success) * 100.0 / SUM(mission_data.count_mission) as success_percentage')
            )
            ->groupBy('launchers.id', 'launchers.name', 'launchers.agency_id')
            ->orderByDesc('success_percentage')
            ->orderByDesc('total_successes')
            ->limit(5)
            ->get();

        if ($bestLaunchers->isNotEmpty()) {
            $response = $bestLaunchers->map(function ($launcher) {
                return [
                    'id' => $launcher->id,
                    'name' => $launcher->name,
                    'agency_id' => $launcher->agency_id,
                    'total_successes' => $launcher->total_successes,
                    'success_percentage' => round($launcher->success_percentage, 2),
                ];
            });

            return response()->json($response, 200);
        } else {
            return response()->json([
                'message' => 'No launchers found'
            ], 404);
        }
    }

    public function launcherWithAgency($id)
    {
        $launcher = DB::table('launchers')
                    ->join('agencies', 'launchers.agency_id', '=', 'agencies.id')
                    ->where('launchers.agency_id', $id)
                    ->select('launchers.*', 'agencies.name as agency_name')
                    ->get();

        if (!$launcher) {
            return response()->json(['message' => 'Launcher not found'], 404);
        }

        return response()->json($launcher, 200);
    }

    public function agencyMissionStatistics($agency_id)
    {
        $statistics = DB::table('mission_data')
                        ->join('launchers', 'mission_data.launcher_id', '=', 'launchers.id')
                        ->join('agencies', 'launchers.agency_id', '=', 'agencies.id')
                        ->where('agencies.id', $agency_id)
                        ->select(
                            DB::raw('COUNT(*) as count_launchers'),
                            DB::raw('SUM(mission_data.count_mission) as total_missions'),
                            DB::raw('SUM(mission_data.mission_success) as total_successes'),
                            DB::raw('SUM(mission_data.mission_failure) as total_failures'),
                            DB::raw('SUM(mission_data.mission_partial_failure) as total_partial_failures')
                        )
                        ->groupBy('agencies.id') // Groupement par l'ID de l'agence
                        ->first();
    
        if (!$statistics) {
            return response()->json(['message' => 'Agency not found or no missions'], 404);
        }
    
        return response()->json($statistics, 200);
    }
}
