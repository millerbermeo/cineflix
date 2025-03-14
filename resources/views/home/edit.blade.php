@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('peliculas') }}">
        <div class="back">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
    </a>

    <form class="content-form" action="{{ route('pelicula.update', $pelicula->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h2>Actualizar Película</h2>

        <label for="titulo" class="input-label">
            <input type="text" name="titulo" id="titulo" value="{{ $pelicula->titulo }}" required placeholder="Título...">
        </label>

        <label for="categoria_id" class="input-label">
            <select name="categoria_id" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ old('categoria_id', $pelicula->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
         </label>


        <label for="descripcion" class="input-label">
            <textarea name="descripcion" id="descripcion" required placeholder="Descripción...">{{ $pelicula->descripcion }}</textarea>
        </label>

        <label for="imagen" class="input-label-img">
            <input type="file" name="imagen" id="imagen">
            <p>Imagen actual: <img src="{{ asset('storage/images/' . $pelicula->imagen) }}" width="50"></p>
        </label>

        <label for="trailer" class="input-label">
            <input type="url" name="trailer" id="trailer" value="{{ $pelicula->trailer }}" placeholder="URL del tráiler...">
        </label>

        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection

<style>
    /* Contenedor general */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    .back {
        width: 50px;
        height: 50px;
        background-color: red;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 5px;
    }

    h2 {
        color: white;
        text-align: center;
    }

    .content-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 400px;
        background-color: #3D3D3D;
        padding: 20px;
        border-radius: 12px;
    }

    .input-label {
        display: flex;
        align-items: center;
        position: relative;
        background: #464646;
        padding: 8px;
        border-radius: 8px;
    }
    .input-label-img {
        display: flex;
        align-items: center;
        position: relative;
        background: #464646;
        border-radius: 8px;
    }

    .input-label input,
    .input-label textarea {
        width: 100%;
        padding: 8px;
        background: none;
        border: none;
        color: rgb(162, 162, 162);
        outline: none;
    }

    .input-label input:focus + .search-icon,
    .input-label textarea:focus + .search-icon {
        display: none;
    }

    .input-label input:valid ~ .search-icon,
    .input-label textarea:valid ~ .search-icon {
        display: block;
    }

    .search-icon {
        position: absolute;
        color: #7e7e7e;
        font-size: 14px;
        right: 10px;
    }

    button {
        background-color:rgb(255, 0, 0);
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    button:hover {
        background-color: #6b6b6b;
    }
</style>
