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

    public function ingresardatos2 (request $datos){
    	$NOMBRE=$datos->nombre;
    	$APELLIDO=$datos->apellido;
    	$CEDULA=$datos->cedula;
    	$PROMEDIO=$datos->promedio;
    	
    	$ENTRADA= array ("$NOMBRE", "$APELLIDO", "$CEDULA", "$PROMEDIO");
    	return view ('mostrar', compact('ENTRADA'));
    }
}
