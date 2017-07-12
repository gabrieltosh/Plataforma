<?php

namespace App\Http\Controllers\panelsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carrera;
use Session;
use Auth;
use Redirect;
class controladorCarrera extends Controller
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
        Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todas las CARRERAS registradas.');
        Session::flash('imagen',$imagen);
        $carreras=Carrera::orderBy('id','desc')->paginate(5);
        return view('panelsu.carrera.index',compact('carreras'));
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
