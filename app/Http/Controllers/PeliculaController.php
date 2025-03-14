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

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|url',
            'trailer' => 'nullable|url'
        ]);

        Pelicula::create($request->all());
        return redirect()->route('home')->with('success', 'Película agregada con éxito.');
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('home.edit', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|url',
            'trailer' => 'nullable|url'
        ]);

        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());

        return redirect()->route('home')->with('success', 'Película actualizada correctamente.');
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('home')->with('success', 'Película eliminada.');
    }
}
