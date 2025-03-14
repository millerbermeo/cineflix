@extends('layouts.app')

@section('content')
<div class="barra-horizontal">
    <h1 class="titulo-movie">Cine Flix</h1>
</div>
    <div class="content">
        <div class="content-info">
        <img src="{{ $pelicula->imagen }}" alt="{{ $pelicula->titulo }}" class="imagen">
        <h1 class="titulo">{{ $pelicula->titulo }}</h1>
        <p class="descripcion">{{ $pelicula->descripcion }}</p>
        </div>
        
        @if($pelicula->trailer)
            <div class="trailer">
                <h2 class="subtitulo">Tráiler</h2>
                <iframe  src="{{ $pelicula->trailer }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        @endif
    </div>
@endsection

<style>

    /* Contenido centrado */
    .content {
        width: 80%;
        margin: 0 auto;
        display: flex;
        padding: 100px;
        gap: 50px
    }

    .barra-horizontal {
        position: fixed;
        background-color: #E50914;
        width: 100%;
        height: 190px;
        z-index: -1;
        top: 0
    }

    .titulo-movie {
        text-align: right;
        padding: 30px;
        font-size: 3.5rem;
        color: white
    }

    .content-info {
        display: flex;
        flex-direction: column;
        max-width: 600px;
        justify-content: start;
        align-items: start;
    }

    /* Imagen de la película */
    .imagen {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
    }

    /* Título de la película */
    .titulo {
        font-size: 3rem;
        font-weight: bold;
        margin-top: 1rem;
        color:rgb(255, 0, 0); /* Gris claro */
    }

    /* Descripción de la película */
    .descripcion {
        color: #e5e7eb; /* Gris claro */
        margin-top: 0.5rem;
    }

    /* Estilo para la sección de tráiler */
    .trailer {
        margin-top: 1rem;
    }

    /* Subtítulo del tráiler */
    .subtitulo {
        font-size: 2rem;
        font-weight: 600;
        color: white
    }

    /* Estilo para los iframes de video */
    iframe {
        width: 800px;
        height: 520px;
        border: none;
    }
</style>
