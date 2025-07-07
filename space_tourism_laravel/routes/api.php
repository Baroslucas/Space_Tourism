<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DestinationController;
use App\Http\Controllers\Api\CrewController;
use App\Http\Controllers\Api\TechnologyController;
use App\Models\Technology;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/destinations', [DestinationController::class, 'index']);
Route::get('/destinations/{id}', [DestinationController::class, 'show']);
Route::get('/crews', [CrewController::class, 'index']);
Route::get('/crews/{id}', [CrewController::class, 'show']);
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/technologies/{id}', [TechnologyController::class, 'show']);
