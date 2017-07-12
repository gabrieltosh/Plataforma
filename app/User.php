<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Carrera;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    protected $fillable = [
        'nombre','apellido','celular','email','codigo', 'password','tipo','imagen',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setImagenAttribute($imagen){
          if(! empty($imagen)){
                $name = Carbon::now()->second.$imagen->getClientOriginalName();
                $this->attributes['imagen'] = $name;
                \Storage::disk('local')->put($name, \File::get($imagen));
          }
    }
    public function carrera()
    {
        return $this->belongsTo('App\Carrera');
    }
}
