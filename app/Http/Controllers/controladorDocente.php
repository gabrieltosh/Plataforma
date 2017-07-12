<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use App\Carrera;
use Session;

class controladorDocente extends Controller
{

   public function index()
    {
        return view('usuario.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrera =\Session::get('carrera');
        $usuario = new User;
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->celular=$request->celular;
        $usuario->email=$request->email;
        $usuario->password=\Hash::make($request->password);
        $usuario->codigo=$request->codigo;
        $usuario->imagen=$request->imagen;
        $usuario->tipo='docente';
        $usuario->carrera_id=$carrera->id;
        $usuario->save();
         return redirect()->route('login');
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
