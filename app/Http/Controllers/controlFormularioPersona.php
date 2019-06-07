<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlFormularioPersona extends Controller
{
    public function ingresardatos(){
    	return view ('ingresar');
    }

    public function mostrardatos(){
    	return view ('mostrar');
    }
}
