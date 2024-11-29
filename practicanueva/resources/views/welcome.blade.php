<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Turista</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="display-2">Bienvenido querido Turista!</h1>
        <div class="d-flex justify-content-center">
            <p>Presiona el botón para iniciar</p>
        </div>
        <div class="d-flex justify-content-center">
            <a  href="{{route('rutaformulario') }}" class="btn btn-primary">Ir al registro</a>
        </div>
    </div>
</body>

</html>