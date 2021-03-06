<?php

namespace App\Http\Controllers\panelsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Materia;
use Session;
use Redirect;
class controladorMateria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
        Session::flash('titulo','Información');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todas las MATERIAS registradas.');
        Session::flash('imagen',$imagen);
        $materias=Materia::orderBy('id','desc')->paginate(5);
        return view('panelsu.materia.index',compact('materias'));
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
        //
    }
}
