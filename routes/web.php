<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VehiculoController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de Propietarios
Route::resource('propietarios', PropietarioController::class);

// Rutas de Vehículos
Route::resource('vehiculos', VehiculoController::class);
