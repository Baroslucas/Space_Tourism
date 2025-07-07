<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\Admin\TechnologyController as AdminTechnologyController;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\Admin\CrewController as AdminCrewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //BLOC USER
    //dashboard to destination
    Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
    //dashboard to crew
    Route::get('/crew', [CrewController::class, 'index'])->name('crew');
    //dashboard to techno
    Route::get('/technology', [TechnologyController::class, 'index'])->name('technology');
});

require __DIR__ . '/auth.php';



//BLOC ADMIN
Route::middleware(['auth', 'isAdmin'])
    ->prefix('/admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('/destinations', AdminDestinationController::class)->except('show');
        Route::resource('/crews', AdminCrewController::class)->except('show');
        Route::resource('/technologies', AdminTechnologyController::class)->except('show');
    });
