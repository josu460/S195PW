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
        // return "llego el formulario al controlador";

        // el all funciona para que te regrese todo dentro de la peticion 
        return $peticion->all();

        //    el path funciona para ver de que ruta se esta enviando la peticion
        //return $peticion->path();

        // para ver la url de donde se esta enviando la peticion
        //return $peticion->url();

        //para ver la ip de la que se mando 
        //return  $peticion->ip();
    }
}
