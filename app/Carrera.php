<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
class Carrera extends Model
{
    use SoftDeletes;
    protected $table='carreras';
    protected $fillable=['nombre','descripcion','imagen'];
    public function setImagenAttribute($imagen){
          if(! empty($imagen)){
                $name = Carbon::now()->second.$imagen->getClientOriginalName();
                $this->attributes['imagen'] = $name;
                \Storage::disk('local')->put($name, \File::get($imagen));
          }
    }
    public function usuario()
    {
    	return $this->hasMany('App\User');
    }
    public function materias()
    {
    	return $this->hasMany('App\Materia');
    }
}
