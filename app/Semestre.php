<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table='semestres';
    protected $fillable=['nombre','año'];
    public function materias()
    {
    	return $this->hasMany('App\Materia');
    }
}
