<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//es necesario importar 
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Josue',
                'apellido' => 'Rivera',
                'correo' => 'josu@gmail.com',
                'telefono' => '4427474799'
            ],
            [
                'nombre' => 'Rodrigo',
                'apellido' => 'Rivera',
                'correo' => 'roco@gmail.com',
                'telefono' => '4424101296' 
            ],
            [
                'nombre' => 'Adriana',
                'apellido' => 'Cruz',
                'correo' => 'adriana@gmail.com',
                'telefono' => '4422546214'
            ]]
        );
    }
}
