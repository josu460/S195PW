@extends('layouts.navbar')
@section('titulo','Principal')
@section('contenido')

<h1 class="titulo">Registro de libro</h1>

<div class="container-md">
    <form action="/enviardatos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN: </label>
            <input type="number" class="form-control" name="isbn" id="isbn" value="{{old('isbn')}}" placeholder="Coloca el número estándar internacional de libro">
            <small>{{$errors->first('isbn')}}</small>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo: </label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Escribe el nombre del libro">
            <small>{{$errors->first('titulo')}}</small>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor: </label>
            <input type="text" class="form-control" name="autor" id="autor" value="{{old('autor')}}" placeholder="Escribe el nombre del Autor">
            <small>{{$errors->first('autor')}}</small>
        </div>
        <div class="mb-3">
            <label for="pagina" class="form-label">Numero de paginas: </label>
            <input type="number" class="form-control" name="pagina" id="pagina" value="{{old('pagina')}}" placeholder="Escribe el total de paginas">
            <small>{{$errors->first('pagina')}}</small>
        </div>
        <div class="mb-3">
            <label for="anou" class="form-label">Año: </label>
            <input type="number" class="form-control" name="anou" id="anou" value="{{old('anou')}}" placeholder="Escribe el año en que se realizo el libro">
            <small>{{$errors->first('anou')}}</small>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial: </label>
            <input type="text" class="form-control" name="editorial" id="editorial" value="{{old('editorial')}}" placeholder="Escribe la editorial al que le pertenece">
            <small>{{$errors->first('editorial')}}</small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email de Editorial: </label>
            <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Escribe el email de la editorial">
            <small>{{$errors->first('email')}}</small>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-warning mb-5">Enviar</button>
        </div>
    </form>
</div>

<x-footer></x-footer>

@endsection