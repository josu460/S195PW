@extends('layouts.plantilla1')
    @section('titulo','Formulario Clientes')
    @section('contenido')

    <div class="container mt-5 col-md-6">
    <div class="card text-center">

        <div class="card-header">
            Registro de clientes
        </div>

        <div class="card-body text-justify">
            <form action="/enviar" method="POST">
            <!-- este es para que genere el token     -->
            @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" name="txtnombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido: </label>
                    <input type="text" class="form-control" name="txtapellido">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="email" class="form-control" name="txtcorreo">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label">Telefono: </label>
                    <input type="number" class="form-control" name="txttelefono">
                </div>
        </div>

        <div class="card-footer text-body-secondary">
            <button class="btn btn-success" type="submit">Guardar</button>
            </form>
        </div>

    </div>
    </div>
    @endsection
    