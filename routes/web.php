<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\AuthController;

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

// Ruta de inicio (Login)
Route::get('/', [AuthController::class, 'index'])->name('home');

// Rutas Auth
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas con el middleware 
Route::middleware(['auth'])->group(function () {
    Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas');
    Route::get('/pelicula/{id}', [PeliculaController::class, 'show'])->name('pelicula.detalle');
    Route::get('/crear', [PeliculaController::class, 'create'])->name('pelicula.create');
    Route::post('/guardar', [PeliculaController::class, 'store'])->name('pelicula.store');
    Route::get('/editar/{id}', [PeliculaController::class, 'edit'])->name('pelicula.edit');
    Route::put('/actualizar/{id}', [PeliculaController::class, 'update'])->name('pelicula.update');
    Route::delete('/eliminar/{id}', [PeliculaController::class, 'destroy'])->name('pelicula.destroy');
});