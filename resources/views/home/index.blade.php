@extends('layouts.app')

@section('title', 'Películas')

@section('content')
<div class="container">
    <div class="bg-fondo">
        <x-navbar />
        <x-hero />
    </div>
    <div class="movie-grid">
    <a href="{{ route('pelicula.create') }}" class="btn-pelicula">Agregar <i class="fas fa-plus"></i></a>

    <div class="contenedor-peliculas">
        <div class="encabezado">
            <h2>Listado de Películas</h2>
        </div>

        <div class="busqueda">
            <input type="search" placeholder="Buscar película">
            <select>
                <option value="">Seleccione género</option>
                <option value="accion">Acción</option>
                <option value="comedia">Comedia</option>
                <option value="drama">Drama</option>
            </select>
        </div>
    </div>

        @foreach($peliculas as $pelicula) 
            <div class="movie-card">
                <!-- <img src="{{ $pelicula->imagen }}" alt="{{ $pelicula->titulo }}" > -->
                <img src="{{ asset('storage/images/' . $pelicula->imagen) }}" class="movie-image" alt="Imagen de {{ $pelicula->titulo }}">

                <p class="movie-description">{{ Str::limit($pelicula->descripcion, 50) }}</p>
                <div class="content-info">
                    <h2 class="movie-title">{{ $pelicula->titulo }}</h2>
                    <a href="{{ route('pelicula.detalle', $pelicula->id) }}" class="movie-link">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
                <div class="content-acciones">
                    <a class="btn-edit" href="{{ route('pelicula.edit', $pelicula->id) }}">
                        Editar <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('pelicula.destroy', $pelicula->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar esta película?')">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
