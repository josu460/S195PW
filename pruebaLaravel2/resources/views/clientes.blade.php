@extends('layouts.plantilla1')
<!-- jalamos la plantilla que creamos -->
@section('titulo','Clientes')
<!-- esta es una seccion para que el titulo se adpate  -->
@section('contenido')
<!-- y aqui es para que nos agarre el contenido de esta vista -->

<!-- esto es para que se traigan los datos de la base de datos -->

<div class="container mt-5 col-md-8">
    @foreach ($consultaClientes as $clientes)
    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            {{$clientes->nombre}}
        </div>

        <div class="card-body">
            <h5 class="fw-bold">{{$clientes->correo}}</h5>
            <h5 class="fw-medium">{{$clientes->telefono}}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">

            <button type="button" class="btn btn-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $clientes->id }}">
                Actualizar
            </button>


            <div class="modal fade" id="modalUpdate{{ $clientes->id }}" tabindex="-1" aria-labelledby="actualizarClienteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-header">

                                <h3>Actualizar cliente</h3>
                            </div>
                            <div class="card-body text-justify">
                                <form action="{{ route('actualizar', $clientes->id)}}" method="POST">

                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">{{ __('Nombre:') }}</label>
                                        <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="{{ old('txtnombre', $clientes->nombre) }}">
                                        <small>{{$errors->first('txtnombre')}}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">{{ __('Apellido:') }}</label>
                                        <input type="text" class="form-control" name="txtapellido" id="txtapellido" value="{{ old('txtapellido', $clientes->apellido) }}">
                                        <small>{{$errors->first('txtapellido')}}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo" class="form-label">{{ __('Correo:') }}</label>
                                        <input type="email" class="form-control" name="txtcorreo" id="txtcorreo" value="{{ old('txtcorreo', $clientes->correo) }}">
                                        <small>{{$errors->first('txtcorreo')}}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="numero" class="form-label">{{ __('Telefono:') }}</label>
                                        <input type="number" class="form-control" name="txttelefono" id="txttelefono" value="{{ old('txttelefono', $clientes->telefono) }}">
                                        <small>{{$errors->first('txttelefono')}}</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm " data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                                    </div>
                                    @session ('Actualizar')
                                    <script>
                                        Swal.fire({
                                            title: "Respuesta del servidor",
                                            text: "Cliente actualizado exitosamente",
                                            icon: "success"
                                        });
                                    </script>
                                    @endsession
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





            <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $clientes->id }}">
                Eliminar
            </button>


            <div class="modal fade" id="modalEliminar{{ $clientes->id }}" tabindex="-1" aria-labelledby="eliminarCliente" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEliminar{{ $clientes->id }}">Confirmación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <svg class="mx-auto mb-4 text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="50" height="50">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <p>¿Estas seguro de que deseas eliminar este usuario?</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <form action="{{ route('eliminar', $clientes->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Sí, estoy seguro</button>
                                @session ('Eliminar')
                                    <script>
                                        Swal.fire({
                                            title: "Eliminado!",
                                            text: "Usuario eliminado exitosamente", 
                                            icon: "success"
                                        });
                                    </script>
                                    @endsession
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @endforeach
</div>



@endsection
<!-- aqui cerramos la seccion -->