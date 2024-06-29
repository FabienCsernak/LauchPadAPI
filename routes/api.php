<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LauncherController;
use App\Http\Controllers\MissionDataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Launchers routes
Route::get('/launchers', [LauncherController::class, 'index']);
Route::get('/launchers/{id}', [LauncherController::class, 'show']);
Route::post('/launchers', [LauncherController::class, 'store']);
Route::put('/launchers/{id}', [LauncherController::class, 'update']);
Route::delete('/launchers/{id}', [LauncherController::class, 'destroy']);

// Mission Data routes
Route::get('/mission_data', [MissionDataController::class, 'index']);
Route::get('/mission_data/{id}', [MissionDataController::class, 'show']);
Route::post('/mission_data', [MissionDataController::class, 'store']);
Route::put('/mission_data/{id}', [MissionDataController::class, 'update']);
Route::delete('/mission_data/{id}', [MissionDataController::class, 'destroy']);