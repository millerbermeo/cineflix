@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Película</h1>
    <form action="{{ route('pelicula.update', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="{{ $pelicula->titulo }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $pelicula->descripcion }}</textarea>

        <label for="imagen">URL de la Imagen:</label>
        <input type="url" name="imagen" value="{{ $pelicula->imagen }}" required>

        <label for="trailer">URL del Tráiler:</label>
        <input type="url" name="trailer" value="{{ $pelicula->trailer }}">

        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
