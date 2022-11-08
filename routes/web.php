<?php

use App\Http\Controllers\admin\UsuarioController;
use App\Http\Controllers\newPage\CartaController;
use App\Http\Controllers\newPage\mainController;
use App\Http\Controllers\newPage\MesaController;
use App\Http\Controllers\newPage\ReservaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newPage\AuthController;

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

Route::get('/', function () {
    return view('other');
});
/**CLIENTES */
Route::group(['middleware' => ['AuthCheck']], function () {

    Route::get('/auth/register', [AuthController::class, 'index'])->name('auth.register');
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    // after logged
    Route::get('/inicio', [mainController::class, 'index'])->name('inicio');
    Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva');
    Route::get('/mesas', [MesaController::class, 'index'])->name('mesa');
    Route::get('/cartas', [CartaController::class, 'index'])->name('cartas');
});
// Save Clientes
Route::post('login/save', [AuthController::class, 'check'])->name('auth.check');
Route::post('register/save', [AuthController::class, 'store'])->name('auth.store');
Route::get('logout', [AuthController::class, 'logout'])->name('salir');


/**USUARIOS */
Route::group(['middleware' => ['AuthUsuarios']], function () {

    Route::get('dashboard', [UsuarioController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('user/login', [UsuarioController::class, 'login'])->name('user.login');
    Route::get('user/register', [UsuarioController::class, 'register'])->name('user.register');
});
// Save Usuarios
Route::post('user/save', [UsuarioController::class, 'save'])->name('user.save');
Route::post('user/logged', [UsuarioController::class, 'check'])->name('user.check');
Route::get('user/logout', [UsuarioController::class, 'logout'])->name('user.logout');
