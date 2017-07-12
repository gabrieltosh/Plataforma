<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPagina extends Controller
{
    public function inicio()
    {
    	return view('template.inicio');
    }
}
