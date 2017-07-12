<?php

use Illuminate\Database\Seeder;
use App\Materia;

class SeedMateria extends Seeder
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
        		'nombre'=>'Programacion I',
        		'descripcion'=>'Lorem ipsum ex duis est ut labore.',
        		'semestre_id'=>1,
        		'carrera_id'=>1,
        		'created_at'=>new DateTime,
        	],
        	[
        		'nombre'=>'Analisis I',
        		'descripcion'=>'Aute sint in. Dolor cillum dolore occaecat.',
        		'semestre_id'=>1,
        		'carrera_id'=>1,
        		'created_at'=>new DateTime,
        	],
 	      	[
        		'nombre'=>'Calculo I',
        		'descripcion'=>'Lorem ipsum aliquip nulla.',
        		'semestre_id'=>1,
        		'carrera_id'=>1,
        		'created_at'=>new DateTime,
        	],
        	[
        		'nombre'=>'Algebra I',
        		'descripcion'=>'Aliqua anim in.',
        		'semestre_id'=>1,
        		'carrera_id'=>1,
        		'created_at'=>new DateTime,
        	],
        	[
        		'nombre'=>'Fisica I',
        		'descripcion'=>'Deserunt veniam ut.',
        		'semestre_id'=>1,
        		'carrera_id'=>1,
        		'created_at'=>new DateTime,
        	],
        	[
        		'nombre'=>'Administracion I',
        		'descripcion'=>'Aute mollit.',
        		'semestre_id'=>1,
        		'carrera_id'=>1,
        		'created_at'=>new DateTime,
        	],
        	[
        		'nombre'=>'Anatomia I',
        		'descripcion'=>'Aute mollit.',
        		'semestre_id'=>1,
        		'carrera_id'=>3,
        		'created_at'=>new DateTime,
        	]
        	);
        Materia::insert($datos);
    }
}
