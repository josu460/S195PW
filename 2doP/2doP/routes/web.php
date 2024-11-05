<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFrituras;

 Route::get('/', function () {
    return view('formFrituras');
});


Route::post('/enviarfrituras',[ControladorFrituras::class,'abrirformulario']) -> name('abrirformulario');

