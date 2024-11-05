@extends('layouts.navbar')
@section('titulo','Principal')
@section('contenido')

<h1 class="titulo">{{ __('Registro de libro') }}</h1>

<div class="container-md">


@if (session('exito'))
        @session ('exito')
        <script>
            Swal.fire({
                title: "Todo correcto ",
                text: " {{$value}} guardado",
                icon: "success"
            });
        </script>
        @endsession
    @endif
    <form action="/enviardatos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">{{ __('ISBN:') }} </label>
            <input type="number" class="form-control" name="isbn" id="isbn" value="{{old('isbn')}}" placeholder="{{ __('Coloca el número estándar internacional de libro') }}">
            <small>{{$errors->first('isbn')}}</small>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">{{ __('Titulo:') }}  </label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="{{ __('Escribe el nombre del libro') }}">
            <small>{{$errors->first('titulo')}}</small>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">{{ __('Autor:') }} </label>
            <input type="text" class="form-control" name="autor" id="autor" value="{{old('autor')}}" placeholder="{{ __('Escribe el nombre del Autor') }}">
            <small>{{$errors->first('autor')}}</small>
        </div>
        <div class="mb-3">
            <label for="pagina" class="form-label">{{ __('Numero de paginas:') }} </label>
            <input type="number" class="form-control" name="pagina" id="pagina" value="{{old('pagina')}}" placeholder="{{ __('Escribe el total de paginas') }}">
            <small>{{$errors->first('pagina')}}</small>
        </div>
        <div class="mb-3">
            <label for="anou" class="form-label">{{ __('Año:') }} </label>
            <input type="number" class="form-control" name="anou" id="anou" value="{{old('anou')}}" placeholder="{{ __('Escribe el año en que se realizo el libro') }}">
            <small>{{$errors->first('anou')}}</small>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">{{ __('Editorial:') }} </label>
            <input type="text" class="form-control" name="editorial" id="editorial" value="{{old('editorial')}}" placeholder="{{ __('Escribe la editorial al que le pertenece') }}">
            <small>{{$errors->first('editorial')}}</small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email de Editorial:') }} </label>
            <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="{{ __('Escribe el email de la editorial') }} ">
            <small>{{$errors->first('email')}}</small>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-warning mb-5">{{ __('Enviar') }}</button>
        </div>
    </form>
</div>

<x-footer></x-footer>

@endsection