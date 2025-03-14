@extends('layouts.app')

@section('title', 'Login')

@section('content')
<main class="login-form">
    <div class="container">

                <div class="card">
                    <h3 class="card-header">Iniciar sesión</h3>
                    <div class="card-body">
                        @if(session('success'))
                            <h1 class="text-success">{{ session('success') }}</h1>
                        @endif
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="form-div">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-div">
                                <input type="password" placeholder="Contraseña" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-div">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Recuérdame</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-danger btn-block">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
      
        
    </div>

    <div class="img-fondo-url">
<img src="https://wallpapers.com/images/high/peaky-blinders-in-grey-smoke-weveznky3w3vtfxl.webp" alt="">
    </div>
</main>
@endsection

<style>
  

    .login-form {
        padding-top: 80px;
        width: 700px;
        margin: auto
    }

    .img-fondo-url {
        position: absolute;
        top:0;
        z-index: -1;
        opacity: 40%;
        right: 20%
    }

    .img-fondo-url > img {
        width: 70%;
    }

    .card {
      
        border: none;
        border-radius: 5px;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 20px
    }

    .card-header {
        font-size: 24px;
        color: #fff;
        font-weight: bold;
        background-color: transparent;
        border-bottom: 1px solid #333;
        padding-bottom: 10px;
    }

    .form-control {
        background-color: #333;
        border: 1px solid #444;
        color: #fff;
        padding: 12px;
        font-size: 14px;
        width: 60%;
        margin: auto;
    }

    .form-control:focus {
        border-color: #e50914;
        background-color: #444;
        color: #fff;
    }

    .form-div {
        margin-bottom: 20px;
    }

    .btn {
        background-color: #e50914;
        border: none;
        font-size: 16px;
        padding: 12px;
        text-transform: uppercase;
    }

    .btn:hover {
        background-color: #f40612;
    }

    .form-check-label {
        color: #ddd;
    }

    .text-danger {
        color: #f44336;
    }

    .text-success {
        color: #4caf50;
    }
</style>
