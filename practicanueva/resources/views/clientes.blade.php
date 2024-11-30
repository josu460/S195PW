@extends('layouts.plantilla1')
<!-- jalamos la plantilla que creamos -->
@section('titulo','Clientes')
<!-- esta es una seccion para que el titulo se adpate  -->
@section('contenido')
<!-- y aqui es para que nos agarre el contenido de esta vista -->

<!-- esto es para que se traigan los datos de la base de datos -->

<div class="container mt-5 col-md-8">
    @foreach ($consulta as $item)
    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            {{ $item -> nombre }}
        </div>

        <div class="card-body">
            <h5 class="fw-bold"> {{ $item -> correo }}</h5>
            <h5 class="fw-medium">{{ $item -> telefono }}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <!-- disparadores para la vista Clientes -->

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list-stars"></i> Opciones
                </button>
                <ul class="dropdown-menu">
                    <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                        <i class="bi bi-pencil-square"></i>Editar
                    </button>
                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                        <i class="bi bi-trash"></i> Borrar
                    </button>
                </ul>
            </div>
        </div>
        @include('options')
        @endforeach
    </div>



    @endsection
    <!-- aqui cerramos la seccion -->