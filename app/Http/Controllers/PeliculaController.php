<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('home.index', compact('peliculas'));
    }

    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('home.detalle', compact('pelicula'));

    }
}
