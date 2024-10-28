<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>
    <link rel="stylesheet" href="{{ asset('css/conversor.css') }}">

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="conversor">
        <h1>Conversor</h1>
    </div>

    <form action="/enviar" method="POST">
        @csrf

        <div class="position-absolute top-50 start-50 translate-middle">


            <input type="float" class="form-control" name="cantidad" placeholder="Cantidad a convertir" aria-label="cantidad" required>
            <br>
            <div class="input-group">
                <select class="form-select" name="primera_unidad" aria-label="primera_unidad" required>
                    <option selected>Choose...</option>
                    <option value="MB">MB</option>
                    <option value="GB">GB</option>
                    <option value="TB">TB</option>
                </select>

                <strong>
                    <p class="ms-5 me-5">A</p>
                </strong>

                <select class="form-select" name="segunda_unidad" aria-label="segunda_unidad" required>
                    <option selected>Choose...</option>
                    <option value="MB">MB</option>
                    <option value="GB">GB</option>
                    <option value="TB">TB</option>
                </select>

            </div>

            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-info" type="submit">Convertir</button>
            </div>
    </form>
    <div class="resultado">
    @if (isset($resultado))
        <p>Resultado: {{ $resultado }}</p>
    @endif
</div>


    </div>

</body>

</html>