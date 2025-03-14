@extends('layouts.app')

@section('title', 'Películas')

@section('content')
<div class="container">
    <div class="bg-fondo">
        <x-navbar />
        <x-hero />
    </div>
    <div class="movie-grid">
        @foreach($peliculas as $pelicula)
            <div class="movie-card">
                <img src="{{ $pelicula->imagen }}" alt="{{ $pelicula->titulo }}" class="movie-image">
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
