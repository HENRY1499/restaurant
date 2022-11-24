<?php

use App\Http\Controllers\admin\BebidasController;
use App\Http\Controllers\admin\EstadoController;
use App\Http\Controllers\admin\PlatosController;
use App\Http\Controllers\admin\ReservaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// 
Route::get('/platos', [PlatosController::class, 'index']);

Route::prefix('/plato')->group(function () {
    Route::post('/store', [PlatosController::class, 'store']);
    Route::get('/show/{id}', [PlatosController::class, 'show']);
    Route::put('/actualizar/{id}', [PlatosController::class, 'update']);
    Route::delete('/delete/{id}', [PlatosController::class, 'destroy']);
});
/**ESTADOS */
Route::get('/estado', [EstadoController::class, 'index']);
Route::prefix('/estados')->group(function () {
    Route::post('/crear', [EstadoController::class, 'store']);
    Route::get('/show/{id}', [EstadoController::class, 'show']);
    Route::put('/actualizar/{id}', [EstadoController::class, 'update']);
    Route::delete('/delete/{id}', [EstadoController::class, 'destroy']);
});
/**Reservas */
Route::get('/reserva', [ReservaController::class, 'index']);
Route::prefix('/reservas')->group(function () {
    Route::post('/crear', [ReservaController::class, 'store']);
    Route::get('/show/{id}', [ReservaController::class, 'show']);
    Route::put('/actualizar/{id}', [ReservaController::class, 'update']);
    Route::delete('/delete/{id}', [ReservaController::class, 'destroy']);
});
