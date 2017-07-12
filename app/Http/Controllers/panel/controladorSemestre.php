<?php

namespace App\Http\Controllers\panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use App\Semestre;
use Auth;
class controladorSemestre extends Controller
{
    public function result()
    {
        $semestres=Semestre::orderBy('id','desc')->paginate(5);
        return view('panel.semestre.index',compact('semestres'));
    }
    public function index()
    {
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todos los SEMESTRES registrados.');
        Session::flash('imagen',$imagen);
        $semestres=Semestre::orderBy('id','desc')->paginate(5);
        return view('panel.semestre.index',compact('semestres'));
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
    public function destroy(Semestre $semestre)
    {   
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        $nombrees=ucfirst($semestre->nombre);
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! el semestre '.$nombrees.' fue eliminado correctamente');
        Session::flash('imagen',$imagen);
        $deleted=$semestre->delete();
        return redirect()->route('semestre-result');
    }
}
