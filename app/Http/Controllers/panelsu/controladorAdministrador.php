<?php

namespace App\Http\Controllers\panelsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use Auth;
use App\Carrera;
class controladorAdministrador extends Controller
{

    public function index()
    {   
        $nombre=Auth::user()->nombre;
        $imagen='perfil.png';
          Session::flash('titulo','Informacion');
        Session::flash('message','¡¡'.$nombre.'!! en esta tabla se muestran todos los ADMINISTRADORES registrados.');
        Session::flash('imagen',$imagen);
        $administradores=User::where('tipo','administrador')->orderBy('id','desc')->paginate(5);
        return view('panelsu.administrador.index',compact('administradores'));
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
    public function destroy($id)
    {
        //
    }
}
