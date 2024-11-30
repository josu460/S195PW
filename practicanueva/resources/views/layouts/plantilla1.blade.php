<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutainicio')}}">{{ __('Turista sin Maps') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- esta es una peticion para indicar que si esta en la ruta inicio se ponga de color amarillo -->
                        <a class="nav-link active {{ request()->routeIs('cliente.create')?'text-warning':''}}" aria-current="page" href="{{route('cliente.create')}}">{{ __('Registro Clientes') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active {{ request()->routeIs('cliente.index')?'text-danger':''}}" aria-current="page" href="{{route('cliente.index')}}">{{ __('Consultar Clientes') }}</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
<!-- este yield funciona para posicionar el contenido que es diferente de la plantilla -->
    @yield('contenido')
</body>
</html>