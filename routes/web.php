<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\RutasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
Route::get('instalacion', [ManualController::class,'instalacion']);
Route::get('vistas', [ManualController::class,'vistas']);
Route::get('vista_blade', [ManualController::class,'vista_blade']);



/* Creamos la ruta con su controlador */
Route::get('rutas', [RutasController::class,'rutas']);

/* Ruta del controlador */
Route::get('controlador', [RutasController::class,'controlador']);

Route::get('modelos', [ManualController::class,'modelo']);

