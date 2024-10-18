<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladorrepaso extends Controller
{
    public function convertir(Request $request)
    {

        $cantidad = $request->input('cantidad');
        $primera_unidad = $request->input('primera_unidad');
        $segunda_unidad = $request->input('segunda_unidad');


        $factor_conversion = [
            'MB' => ['GB' => 1 / 1024, 'TB' => 1 / (1024 * 1024)],
            'GB' => ['MB' => 1024, 'TB' => 1 / 1024],
            'TB' => ['MB' => 1024 * 1024, 'GB' => 1024],
        ];


        $resultado = ($primera_unidad === $segunda_unidad)
            ? $cantidad
            : $cantidad * $factor_conversion[$primera_unidad][$segunda_unidad];


        return view('repaso1', ['resultado' => $resultado]);
    }
}
