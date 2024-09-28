@extends('layouts.plantilla1')
<!-- jalamos la plantilla que creamos -->
@section('titulo','Clientes')
<!-- esta es una seccion para que el titulo se adpate  -->
    @section('contenido')
    <!-- y aqui es para que nos agarre el contenido de esta vista -->


    <div class="container mt-5 col-md-8">
        <div class="card text-justify font-monospace">

            <div class="card-header fs-5 text-primary">
                Josué Adrián Rivera Cruz
            </div>

            <div class="card-body">
                <h5 class="fw-bold">josue.rivera@gmail.com</h5>
                <h5 class="fw-medium">4427474799</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm "> Actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm "> Eliminar</button>
            </div>

        </div>
    </div>
    @endsection
    <!-- aqui cerramos la seccion -->
