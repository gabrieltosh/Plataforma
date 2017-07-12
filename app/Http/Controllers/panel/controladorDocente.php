<?php

namespace App\Http\Controllers\panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Auth;
use App\Carrera;
class controladorDocente extends Controller
{

    public function result()
    {
        $carrera=Auth::user()->carrera_id;
        $docentes=User::where('tipo','docente')->where('carrera_id',$carrera)->orderBy('id','asc')->paginate(5);
        return view('panel.docente.index',compact('docentes'));
    }
    public function index()
    {
    	$nombre=Auth::user()->nombre;
        $carrera=Auth::user()->carrera_id;
        $imagen='perfil.png';
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todos los DOCENTES registrados.');
        Session::flash('imagen',$imagen);
        $docentes=User::where('tipo','docente')->where('carrera_id',$carrera)->orderBy('id','asc')->paginate(5);
        return view('panel.docente.index',compact('docentes'));
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
    public function show($id)
    {
        //
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
    public function destroy(User $docente)
    {
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        $nombrees=ucfirst($docente->nombre);
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! el docente '.$nombrees.' fue eliminado correctamente');
        Session::flash('imagen',$imagen);
        $deleted=$docente->delete();
        return redirect()->route('docente-result');
    }
}
