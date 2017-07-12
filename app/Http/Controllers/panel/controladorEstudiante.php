<?php

namespace App\Http\Controllers\panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Redirect;
use Auth;
use App\Carrera;
class controladorEstudiante extends Controller
{
    public function result()
    {
        $carrera=Auth::user()->carrera_id;
        $estudiantes=User::where('tipo','estudiante')->where('carrera_id',$carrera)->orderBy('id','asc')->paginate(5);
        return view('panel.estudiante.index',compact('estudiantes'));
    }

    public function index()
    {   
        $nombre=Auth::user()->nombre;
        $carrera=Auth::user()->carrera_id;
        $imagen='perfil.png';
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todos las ESTUDIANTES registrados.');
        Session::flash('imagen',$imagen);
        $estudiantes=User::where('tipo','estudiante')->where('carrera_id',$carrera)->orderBy('id','asc')->paginate(5);
        return view('panel.estudiante.index',compact('estudiantes'));
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $estudiante)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $estudiante)
    {
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        $nombrees=ucfirst($estudiante->nombre);
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! el estudiante '.$nombrees.' fue eliminado correctamente');
        Session::flash('imagen',$imagen);
        $deleted=$estudiante->delete();
        return redirect()->route('estudiante-result');
    }
}
