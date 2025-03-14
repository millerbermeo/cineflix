<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return response()->json($categoria);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria = Categoria::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json($categoria, 201);
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if ($categoria) {
            $categoria->update($request->only('nombre'));
            return response()->json($categoria);
        }

        return response()->json(['error' => 'Categoría no encontrada'], 404);
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if ($categoria) {
            $categoria->delete();
            return response()->json(['message' => 'Categoría eliminada']);
        }

        return response()->json(['error' => 'Categoría no encontrada'], 404);
    }
}
