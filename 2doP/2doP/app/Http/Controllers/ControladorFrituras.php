<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{
    
public function abrirFormulario(Request $peticion){
    $validacion = $peticion->validate([
        'nombre' => 'required',
        'sabor' => 'required',
        'peso' => 'required',
    ]);
    
    session()->flash('exito', 'Se guardo: ' . $peticion->input('nombre'));
    return view('/formFrituras');
    // return $peticion->all();
}
}




