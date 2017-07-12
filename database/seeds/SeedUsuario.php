<?php

use Illuminate\Database\Seeder;
use App\User;

class SeedUsuario extends Seeder
{

    public function run()
    {
        $datos=array(
    	[
        	'nombre'=>'Gabriel Angel',
        	'apellido'=>'Pinto Cutili',
    		'celular'=>76518845,
    		'email'=>'angel22586310@gmail.com',
    		'codigo'=>'SIS13149840',
    		'password'=>\Hash::make('12345678'),
    		'tipo'=>'estudiante',
    		'carrera_id'=>'1',
            'imagen'=>'perfil.png'
    	],
        [
            'nombre'=>'Gabriel',
            'apellido'=>'Pinto',
            'celular'=>765185,
            'email'=>'angel123@gmail.com',
            'codigo'=>'SIS131498440',
            'password'=>\Hash::make('12345678'),
            'tipo'=>'administrador',
            'carrera_id'=>'1',
            'imagen'=>'perfil.png'
        ],
        [
            'nombre'=>'Joel Freddy',
            'apellido'=>'Pinto Cutili',
            'celular'=>76518455,
            'email'=>'angel1234@gmail.com',
            'codigo'=>'SIS1314981440',
            'password'=>\Hash::make('12345678'),
            'tipo'=>'docente',
            'carrera_id'=>'1',
            'imagen'=>'perfil.png'
        ],
        [
            'nombre'=>'Yerko',
            'apellido'=>'Pinto',
            'celular'=>765184545,
            'email'=>'angel60133971@gmail.com',
            'codigo'=>'SIS13149814410',
            'password'=>\Hash::make('12345678'),
            'tipo'=>'superusuario',
            'carrera_id'=>'1',
            'imagen'=>'perfil.png'
        ]);
        User::insert($datos);
    }
}
