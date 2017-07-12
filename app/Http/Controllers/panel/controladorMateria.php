<?php

namespace App\Http\Controllers\panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Materia;
use Redirect;
class controladorMateria extends Controller
{
    public function result()
    {
        $carrera=Auth::user()->carrera_id;
        $materias=Materia::where('carrera_id',$carrera)->orderBy('id','desc')->paginate(5);
        return view('panel.materia.index',compact('materias'));
    }

    public function index()
    {
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todas las MATERIAS registradas.');
        Session::flash('imagen',$imagen);
        $carrera=Auth::user()->carrera_id;
        $materias=Materia::where('carrera_id',$carrera)->orderBy('id','desc')->paginate(5);
        return view('panel.materia.index',compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        $materia=Materia::find($id);
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        $nombrees=ucfirst($materia->nombre);
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! la materia '.$nombrees.' fue eliminado correctamente');
        Session::flash('imagen',$imagen);
        $deleted=$materia->delete();
        return redirect()->route('materia-result');
        
    }
}
