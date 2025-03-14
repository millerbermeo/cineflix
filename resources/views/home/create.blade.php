@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Película</h1>
    <form class="content-form" action="{{ route('pelicula.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="titulo" class="input-label">
        <input type="text" name="titulo" required placeholder="Título...">
        <i class="fa fa-search search-icon"></i>
    </label>

    <label for="descripcion" class="input-label">
        <textarea name="descripcion" required placeholder="Descripción..."></textarea>
        <i class="fa fa-search search-icon"></i>
    </label>

    <label for="imagen" class="input-label">
        <input type="file" name="imagen" required>
        <i class="fa fa-search search-icon"></i>
    </label>

    <label for="trailer" class="input-label">
        <input type="url" name="trailer" placeholder="URL del tráiler (opcional)...">
        <i class="fa fa-search search-icon"></i>
    </label>

    <button type="submit">Guardar</button>
</form>
</div>
@endsection

<style>
    /* Contenedor general */
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 20px;
    }

    h1 {
        color: white;
        margin-bottom: 20px;
    }

    /* Formulario */
    .content-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 400px;
        background-color: #3D3D3D;
        padding: 20px;
        border-radius: 12px;
    }

    /* Estilos de las etiquetas de entrada */
    .input-label {
        display: flex;
        align-items: center;
        position: relative;
        background: #464646;
        padding: 8px;
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

    /* Botón de submit */
    button {
        background-color: rgb(255, 0, 0);
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
