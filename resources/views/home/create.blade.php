@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Película</h1>
    <form action="{{ route('pelicula.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <label for="imagen">URL de la Imagen:</label>
        <input type="url" name="imagen" required>

        <label for="trailer">URL del Tráiler (opcional):</label>
        <input type="url" name="trailer">

        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
