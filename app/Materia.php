<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materia extends Model
{
    use SoftDeletes;
    protected $table='materias';
    protected $fillable=['nombre','descripcion','semestre_id','carrera_id'];
    public function carrera()
    {
    	return $this->belongsTo('App\Carrera');
    }
    public function semestre()
    {
    	return $this->belongsTo('App\Semestre');
    }
}
