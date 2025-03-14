<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
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

Route::get('/', [PeliculaController::class, 'index'])->name('home');
Route::get('/pelicula/{id}', [PeliculaController::class, 'show'])->name('pelicula.detalle');
