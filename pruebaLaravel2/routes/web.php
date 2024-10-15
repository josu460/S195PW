<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\vistas;


// ruta para trabajar con un controlador 
Route :: get('/', [vistas::class, 'home']) -> name ('rutainicio');
Route :: get('/formulario', [vistas::class, 'formulario']) -> name ('rutaformulario');
Route :: get('/clientes', [vistas::class, 'consulta']) -> name ('rutaclientes');


// Error 419 es por que funciona bien la seguridad de laravel, pero no se ha configurado el formulario para que funcione con laravel

Route :: post('/enviar', [vistas::class, 'procesarCliente']) -> name ('procesar');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view("/","welcome")->name('rutainicio');

// Route::view('/formulario', 'formulario')->name('rutaformulario');

// Route::view('/clientes', 'clientes')-> name('rutaclientes');

Route::view('/componentes', 'componentes') -> name('componentes');