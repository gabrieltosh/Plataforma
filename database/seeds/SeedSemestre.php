<?php

use Illuminate\Database\Seeder;
use App\Semestre;

class SeedSemestre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array(
        	[
        		'nombre'=>'Primer Semestre',
        		'año'=>'Primer Año'
        	],
        	[
        		'nombre'=>'Segundo Semestre',
        		'año'=>'Primer Año'
        	],
        	[
        		'nombre'=>'Tercer Semestre',
        		'año'=>'Segundo Año'
        	],
        	[
        		'nombre'=>'Cuarto Semestre',
        		'año'=>'Segundo Año'
        	],
        	[
        		'nombre'=>'Quinto Semestre',
        		'año'=>'Tercer Año'
        	],
        	[
        		'nombre'=>'Sexto Semestre',
        		'año'=>'Tercer Año'
        	],
        	[
        		'nombre'=>'Septimo Semestre',
        		'año'=>'Cuarto Año'
        	],
        	[
        		'nombre'=>'Octavo Semestre',
        		'año'=>'Cuarto Año'
        	],
        	[
        		'nombre'=>'Noveno Semestre',
        		'año'=>'Quinto Año'
        	],
        	[
        		'nombre'=>'Decimo Semestre',
        		'año'=>'Quinto Año'
        	]);
        Semestre::insert($datos);
    }
}
