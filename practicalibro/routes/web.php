<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorvistas;

Route::get('/', function () {
    return view('welcome');
});

Route::get('navbar',[Controladorvistas::class,'navbar']) -> name('navbar');
