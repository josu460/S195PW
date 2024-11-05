<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    @vite(['resources/js/app.js'])
</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">
 

@if (session('exito'))
        @session ('exito')
        <script>
            Swal.fire({
                title: "Todo correcto ",
                text: " {{$value}}",
                icon: "success"
            });
        </script>
        @endsession
    @endif


    <form action="/enviarfrituras" method="POST">
    @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
            <small>{{$errors->first('nombre')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" name="sabor" class="form-control " value="{{old('sabor')}}">
            <small>{{$errors->first('sabor')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" name="peso" class="form-control" value="{{old('peso')}}" >
            <small>{{$errors->first('peso')}}</small>
        </div>

        <button type="submit" class="btn btn-primary "> Guardar Fritura</button>
    </form>
</div>

</body>
</html>