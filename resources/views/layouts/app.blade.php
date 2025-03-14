<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inicio')</title>
    <!-- Vincula el archivo CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <!-- Incluimos el encabezado común -->
    @include('partials.header')

    <!-- Contenido principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Incluimos el pie de página común -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
