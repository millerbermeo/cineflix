@extends('layouts.app')

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
                <a href="{{ route('pelicula.detalle', $pelicula->id) }}" class="movie-link"><i class="fas fa-eye"></i>
                </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection



<style>
.bg-fondo {
    background-image: url('{{ asset('img/fondo.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 80vh;

    z-index: -1
}
</style>