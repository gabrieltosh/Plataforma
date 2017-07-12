<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use App\Carrera;
use Session;
class controladorLogin extends Controller
{
	public function __construct()
    {
    	if(!\Session::has('carrera')) \Session::put('carrera',array());
    }
    public function inicio()
    {
    	return view('login.login');
    }
    public function log(Request $request)
    {
    		
    	if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
    	{
            if(Auth::user()->tipo=='administrador')
            {
                return redirect()->route('panel');
            }else
            {
                if(Auth::user()->tipo=='docente')
                {
                    return redirect()->route('semestre');
                }else
                {
                    if(Auth::user()->tipo=='superusuario')
                    {
                        return redirect()->route('panelsu');
                    }else
                    {
                        return redirect()->route('semestre');
                    }
                }
            }	
    	}else
    	{
    		return redirect()->route('login');
    	}
    }
    public function logout()
    {
    	Auth::logout();
        return redirect()->route('login');
    }
    public function opcion(Carrera $id)
    {
    	 \Session::put('carrera',$id);
    	return view('usuario.opcion');
    }
    public function carrera()
    {
    	$carreras=Carrera::all();
      	return view('usuario.carrera',compact('carreras'));
    }
}
