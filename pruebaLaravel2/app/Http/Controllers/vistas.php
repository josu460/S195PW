<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistas extends Controller
{

    public function home()
    {
        return view('welcome');
    }
    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(Request $peticion)
    {

            $validacion = $peticion->validate([
                'txtnombre' => 'required|min:3|max:255',
                'txtapellido' => 'required|min:3|max:255',
                'txtcorreo' => 'required|email:rfc,dns',
                'txttelefono' => 'required|min:3|max:255'
            ]);

            $usuario = $peticion -> input('txtnombre');
            session()->flash ('exito','Se guardo el usuario :' . $usuario);
        return to_route('rutaformulario');

    }
}
