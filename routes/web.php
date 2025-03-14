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

Route::get('/', [PeliculaController::class, 'index'])->name('home'); // Esta es la ruta de incio funciona como vista y lista las peliculas
Route::get('/pelicula/{id}', [PeliculaController::class, 'show'])->name('pelicula.detalle'); // esta ruta necesita un parametro el url para mostra la pelicula filtrada
Route::get('/crear', [PeliculaController::class, 'create'])->name('pelicula.create'); // esta ruta nos manda una vista para crear una pelicula
Route::post('/guardar', [PeliculaController::class, 'store'])->name('pelicula.store'); // esta vista la guarda en la bd
Route::get('/editar/{id}', [PeliculaController::class, 'edit'])->name('pelicula.edit'); // esta ruta ejecuta la vista de actualizar y le pasa los datos
Route::put('/actualizar/{id}', [PeliculaController::class, 'update'])->name('pelicula.update'); // aca se hace como tal la actuzacion de los campos
Route::delete('/eliminar/{id}', [PeliculaController::class, 'destroy'])->name('pelicula.destroy'); // abre un modal que pide la confirmacion de una pelicula
