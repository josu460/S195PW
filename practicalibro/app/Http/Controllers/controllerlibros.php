<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerlibros extends Controller
{
    public function registrarlibros(Request $peticion){
        $validacion = $peticion -> validate([
            'isbn' => 'required|min:13|max:50',
            'titulo' => 'required|min:5|max150',
            'autor' => 'required|min:5|max150',
            'pagina' => 'required|integer|min:1|max:1000',
            'anou' => 'required|integer|min:4|max:2024',
            'editorial' => 'required|min:5|max150',
            'email' => 'required|email:rfc,dns'
        ]);
        
    }
}