<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semestre;
use App\Materia;
use Auth;
class controladorSemestre extends Controller
{
    public function mostrar()
    {
    	$semestres=Semestre::all();
    	return view('semestre.mostrar',compact('semestres'));
    }
    public function materia_semestre(Semestre $id)
    {	
    	$usuarioID=Auth::user()->carrera_id;
    	$materias=Materia::orderBy('id','asc')->where('semestre_id',$id->id)->where('carrera_id',$usuarioID)->get();
    	return view('materias.mostrar',compact('materias'));
    }
}
