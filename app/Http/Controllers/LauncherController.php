<?php

namespace App\Http\Controllers;

use App\Models\Launcher;
use Illuminate\Http\Request;

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
}
