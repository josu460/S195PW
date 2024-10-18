<?php

use App\Http\Controllers\Controladorvistas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorrepaso;

Route::get('/', function () {
    return view('welcome');
})-> name('home');


Route::get('/repaso1', [Controladorvistas::class,'repaso'])->name('repaso');

Route::post('/enviar', [Controladorrepaso::class,'convertir']) -> name('convertir');

