<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistas;
use App\Http\Controllers\ClienteController;


Route :: get('/', [vistas::class, 'home']) -> name ('rutainicio');


// rutas de practica viernes
Route::resource('cliente',ClienteController::class);