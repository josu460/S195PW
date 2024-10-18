<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portda HTML</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <img src="{{ asset('img/logo_upq.svg') }}" alt="logo_upq" class="img-fluid" style="max-width: 250px;">
    </div>

    <div class="position-absolute top-50 start-50 translate-middle ">
        <center>
            <h1>Josué Adrián Rivera Cruz</h1>
            <h2 class="mt-4">Repaso 1 Laravel </h2>
            <h2 class="mt-4">S-195</h2>
            <h2 class="mt-4">18/10/2024</h2>
            <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{route('repaso') }}" class="btn btn-primary mt-4">Repaso 1</a>
            </div>
        </center>
        
    </div>


</body>

</html>