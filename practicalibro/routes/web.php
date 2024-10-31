<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorvistas;
use App\Http\Controllers\controllerlibros;

Route::get('/',[Controladorvistas::class,'inicio']) -> name('inicio');

Route::get('navbar',[Controladorvistas::class,'navbar']) -> name('navbar');

Route:: get('formulario',[Controladorvistas::class,'formulario']) -> name('formulario');

Route:: post('/enviardatos',[controllerlibros::class,'registrarlibros']) -> name('registrarlibros');