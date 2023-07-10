<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $rol=Auth::user()->id_rol;

        if($rol==1){
            return view('comite.comiteMenu');
        }else if($rol==2){
            return view('docente.docente');
        }else if($rol==3){
            return view('estudiante.estudiante');
        }else {
            return view('dashboard');
        }
    }
}
