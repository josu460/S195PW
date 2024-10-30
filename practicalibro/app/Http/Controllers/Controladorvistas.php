<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladorvistas extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function navbar(){
        return view('navbar');
    }
}
