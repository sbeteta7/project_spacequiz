<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function first_step_register(){

        return view('auth.tipo_cuenta');
    }

    public function formulario_usuario()
    {   
        try {
            $tipo_cuenta =request('tipo_cuenta'); 
        } catch (\Throwable $th) {
            $tipo_cuenta=null;
        }
        
        return view('auth.tipo_cuenta',compact('tipo_cuenta'));
    }


}

