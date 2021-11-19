<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('paciente')->insert([
        	[
	        	'nombres' => 'Jhon Alexander',
	        	'apellidos' => 'Mamani Ortiz',
	        	'edad' => 25,
	        	'sexo' => 'Masculino',
	        	'ci' => 75173379,
	        	'tipo_sangre' => 'A+',
	        	'telefono' => 75173379,
	        	'correo' => 'jhon@gmail.com',
	        	'direccion' => 'barrio el chaqueñito'
        	],
        	[
	        	'nombres' => 'Marisol',
	        	'apellidos' => 'Jove Salinas',
	        	'edad' => 23,
	        	'sexo' => 'Femenino',
	        	'dni' => 75152102,
	        	'tipo_sangre' => 'A-',
	        	'telefono' => 75152102,
	        	'correo' => 'Marisol@gmail.com',
	        	'direccion' => 'barrio la playa'
        	],
        	[
	        	'nombres' => 'Juana',
	        	'apellidos' => 'Ortiz Enrriquez',
	        	'edad' => 52,
	        	'sexo' => 'Femenino',
	        	'dni' => 7052602,
	        	'tipo_sangre' => 'A+',
	        	'telefono' => 7052602,
	        	'correo' => 'Juana@gmail.com',
	        	'direccion' => 'barrio el chaqueñito'
        	]
        ]);  
    }
}
