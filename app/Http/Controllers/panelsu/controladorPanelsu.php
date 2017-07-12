<?php

namespace App\Http\Controllers\panelsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class controladorPanelsu extends Controller
{
    public function inicio()
    {
    	$nombre=Auth::user()->nombre;
    	$imagen=Auth::user()->imagen;
    	Session::flash('titulo','Bienvenido');
    	Session::flash('message','Bienvenido al panel de Super Usuario'.' '.$nombre);
    	Session::flash('imagen',$imagen);
    	return view('panelsu.inicio');
    }
}
