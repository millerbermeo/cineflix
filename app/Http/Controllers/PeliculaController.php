<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PeliculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // retorna la vista de peliculas mas la data
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('home.index', compact('peliculas'));
    }

    // retornna la vista y la pelicula filtrada para la url
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('home.detalle', compact('pelicula'));

    }

    public function create()
    {
        $categorias = Categoria::all();  // Obtén todas las categorías
        return view('home.create', compact('categorias'));
    
    }

    // Guardar el nuevo registro en bd
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validación de imagen
            'trailer' => 'nullable|url',
            'categoria_id' => 'exists:categorias,id',
        ]);

        // Guardar la imagen
        $nombreImagen = time() . '.' . $request->file('imagen')->getClientOriginalExtension();
        $request->file('imagen')->storeAs('public/images', $nombreImagen);

        Pelicula::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $nombreImagen,
            'trailer' => $request->trailer,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('home')->with('success', 'Película agregada con éxito.');
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $categorias = Categoria::all();
        return view('home.edit', compact('pelicula', 'categorias'));
    }

    // actualiza los datos del registro
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
            'trailer' => 'nullable|url',
            'categoria_id' => 'exists:categorias,id', 
        ]);
    
        $pelicula = Pelicula::findOrFail($id);

        if ($request->hasFile('imagen')) {
            // Elimina la imagen anterior
            if ($pelicula->imagen) {
                Storage::delete('public/images/' . $pelicula->imagen);
            }
    
            // Guarda la nueva imagen
            $nombreImagen = time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->file('imagen')->storeAs('public/images', $nombreImagen);
    
            $pelicula->imagen = $nombreImagen;
        }
    
        // Actualizar otros campos
        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->trailer = $request->trailer;
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->save();
    
        return redirect()->route('home')->with('success', 'Película actualizada correctamente.');
    }
    
    // eliminar el registro con el id  que llega de la url
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('home')->with('success', 'Película eliminada.');
    }
}
