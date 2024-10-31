<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    @vite(['resources/js/app.js'])
</head>

<body>

    <nav  class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio')}}"><strong>  Los Tres Cerditos</strong> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('inicio')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"  aria-current="page" href="{{ route('formulario')}}">Registro de libro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')
</body>

</html>