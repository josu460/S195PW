<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistas;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/componentes', 'componentes') -> name('componentes');

Route::view("/","welcome")->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')-> name('rutaclientes');

Route :: get('/', [vistas::class, 'home']) -> name ('rutainicio');