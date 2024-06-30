<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    public function index()
    {
        return Agencies::all();
    }

    public function show($id)
    {
        return Agencies::find($id);
    }

    public function allAgenciesWithLaunchers()
    {
        $agencies = DB::table('agencies')
                        ->leftJoin('launchers', 'agencies.id', '=', 'launchers.agency_id')
                        ->leftJoin('mission_data', 'launchers.id', '=', 'mission_data.launcher_id')
                        ->select(
                            'agencies.id as agency_id',
                            'agencies.name as agency_name',
                            'launchers.id as launcher_id',
                            'launchers.name as launcher_name',
                            'launchers.price as price',
                            'launchers.diameter as diameter',
                            'launchers.height as height',
                            'launchers.LEO as LEO',
                            'launchers.GTO as GTO',
                            'launchers.stage as stage',
                            'launchers.liftoff_thrust as liftoff_thrust',
                            DB::raw('SUM(mission_data.count_mission) as total_missions_for_launcher')
                        )
                        ->groupBy('agencies.id', 'launchers.id')
                        ->orderBy('agencies.id')
                        ->get();

        $agencyStatistics = DB::table('agencies')
                                ->leftJoin('launchers', 'agencies.id', '=', 'launchers.agency_id')
                                ->leftJoin('mission_data', 'launchers.id', '=', 'mission_data.launcher_id')
                                ->select(
                                    'agencies.id as agency_id',
                                    'agencies.name as agency_name',
                                    'launchers.price as price',
                                    'launchers.diameter as diameter',
                                    'launchers.height as height',
                                    'launchers.LEO as LEO',
                                    'launchers.GTO as GTO',
                                    'launchers.stage as stage',
                                    'launchers.liftoff_thrust as liftoff_thrust',
                                    DB::raw('SUM(mission_data.count_mission) as total_missions'),
                                    DB::raw('SUM(mission_data.mission_success) * 100.0 / SUM(mission_data.count_mission) as success_percentage')
                                )
                                ->groupBy('agencies.id')
                                ->orderBy('agencies.id')
                                ->get();

        $response = [];
        foreach ($agencyStatistics as $agency) {
            $agencyData = [
                'agency_id' => $agency->agency_id,
                'agency_name' => $agency->agency_name,
                'total_missions' => $agency->total_missions,
                'success_percentage' => round($agency->success_percentage, 2),
                'launchers' => []
            ];

            foreach ($agencies as $item) {
                if ($item->agency_id == $agency->agency_id) {
                    $launcherData = [
                        'launcher_id' => $item->launcher_id,
                        'launcher_name' => $item->launcher_name,
                        'total_missions_for_launcher' => $item->total_missions_for_launcher,
                        'price' => $item->price,
                        'diameter' => $item->diameter,
                        'height' => $item->height,
                        'LEO' => $item->LEO,
                        'GTO' => $item->GTO,
                        'stage' => $item->stage,
                        'liftoff_thrust' => $item->liftoff_thrust
                    ];
                    $agencyData['launchers'][] = $launcherData;
                }
            }

            $response[] = $agencyData;
        }

        return response()->json(['data' => $response], 200);
    }
}
