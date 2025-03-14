@extends('layouts.app')

@section('content')

<head>
    <link href="{{ asset('css/detalle.css') }}" rel="stylesheet">
</head>

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
        padding: 45px;
        gap: 50px
    }

    .barra-horizontal {
        position: fixed;
        background-color: #E50914;
        width: 100%;
        height: 130px;
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
        width: 350px;
        height: auto;
        max-height: 300px;
        object-fit: cover;
    }

    /* Título de la película */
    .titulo {
        font-size: 3rem;
        font-weight: bold;
        margin-top: 1rem;
        color: white; /* Gris claro */
    }

    /* Descripción de la película */
    .descripcion {
        color:rgb(235, 229, 229); /* Gris claro */
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
        width: 600px;
        height: 450px;
        border: none;
    }
</style>
