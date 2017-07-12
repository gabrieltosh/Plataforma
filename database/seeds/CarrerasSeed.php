<?php

use Illuminate\Database\Seeder;
use App\Carrera;

class CarrerasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array([
        'nombre'=>'Ingenieria de Sistemas',
        'descripcion'=>'Ingenieria de Sistemas',
        'imagen'=>'sistemas.jpg',
        'created_at'=>new DateTime,
        'updated_at'=>new DateTime,
        'deleted_at'=>null
        ],
      	[
        'nombre'=>'Derecho',
        'descripcion'=>'Derecho',
        'imagen'=>'Derecho.jpg',
        'created_at'=>new DateTime,
        'updated_at'=>new DateTime,
        'deleted_at'=>null
        ],
        [
        'nombre'=>'Medicina',
        'descripcion'=>'Medicina',
        'imagen'=>'medicina.jpg',
        'created_at'=>new DateTime,
        'updated_at'=>new DateTime,
        'deleted_at'=>null
        ],
        [
        'nombre'=>'Psicologia',
        'descripcion'=>'Psicologia',
        'imagen'=>'psicologia.jpg',
        'created_at'=>new DateTime,
        'updated_at'=>new DateTime,
        'deleted_at'=>null
        ]);
        Carrera::insert($datos);
    }
}
