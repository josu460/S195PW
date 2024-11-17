<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        
        $usuario = $request-> input('txtnombre');
        session()->flash ('exito','Se guardo el usuario :' . $usuario);
    return to_route('rutaformulario');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
