@extends('layouts.plantilla1')
    @section('titulo','Componentes Blade')
    @section('contenido')

        <x-Card titulo="Hola S195" encabezado="Titulo 1" textoboton="guardar"> prueba 1 slot para contenido</x-Card>
        
        <x-Card titulo="Adios S195" encabezado="Titulo 2" textoboton="guardar 2"> hola</x-Card>
    
        <x-Alert tipo="success">Alerta Verde</x-Alert>

        <x-Alert tipo="danger">Alerta Roja</x-Alert>
    @endsection
    