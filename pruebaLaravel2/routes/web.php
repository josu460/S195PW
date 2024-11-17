<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\vistas;

// ruta para trabajar con un controlador 

Route :: get('/', [vistas::class, 'home']) -> name ('rutainicio');

//Rutas de controlador clienteControler
Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');
Route::get('/clientes/create', [clienteController::class, 'create'])->name('rutaformulario');
Route::post('/clientes', [clienteController::class, 'store'])->name('procesar');


// Error 419 es por que funciona bien la seguridad de laravel, pero no se ha configurado el formulario para que funcione con laravel

//Route :: post('/enviar', [vistas::class, 'procesarCliente']) -> name ('procesar');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view("/","welcome")->name('rutainicio');

// Route::view('/formulario', 'formulario')->name('rutaformulario');

// Route::view('/clientes', 'clientes')-> name('rutaclientes');

Route::view('/componentes', 'componentes') -> name('componentes');