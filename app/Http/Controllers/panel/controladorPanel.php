<?php

namespace App\Http\Controllers\panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
class controladorPanel extends Controller
{
    public function inicio()
    {
    	$nombre=Auth::user()->nombre;
    	$imagen=Auth::user()->imagen;
    	Session::flash('titulo','Bienvenido');
    	Session::flash('message','Bienvenido al panel de administracion'.' '.$nombre);
    	Session::flash('imagen',$imagen);
    	return view('panel.inicio');
    }
}
