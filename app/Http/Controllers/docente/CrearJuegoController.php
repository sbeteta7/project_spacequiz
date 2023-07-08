<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CrearJuegoController extends Controller
{
    public function crear_juego(Request $request){
        $codigo =$request->codigo;

        $array_preguntas =DB::table('partida')
        ->select('partida_preguntas.id_pregunta','partida_preguntas.id_partida','partida.duracion','partida.num_preguntas')
        ->join('partida_preguntas','partida.id_partida','=','partida_preguntas.id_partida')
        ->where('codigo','=',$codigo)
        ->get();


        foreach ($array_preguntas as $array_pregunta) {

            $valores[] = $array_pregunta->id_pregunta;
            $id_partida = $array_pregunta->id_partida;
        }
     #   $id_partida=$array_preguntas->id_partida;

        $preguntas =DB::table('preguntas')
        ->select('preguntas.id_pregunta','preguntas.pregunta','respuestas.respuesta','respuestas.estado','respuestas.id_respuesta')
        ->join('respuestas','preguntas.id_pregunta','=','respuestas.id_pregunta')
        ->whereIn('preguntas.id_pregunta',$valores)
        ->get();

        $grupo_pregunta = [];

        foreach ($preguntas as $id_pregunta) {

        #$grupo_pregunta[$id_pregunta->id_pregunta][$id_pregunta->pregunta][$id_pregunta->id_respuesta][$id_pregunta->respuesta]= $id_pregunta->estado;   
 
       $grupo_pregunta[$id_pregunta->id_pregunta][$id_pregunta->pregunta][$id_pregunta->respuesta]= $id_pregunta->estado;   
        }

    #return dd($grupo_pregunta);

       return view('estudiante.juego',compact('grupo_pregunta','id_partida'));


    }
}

