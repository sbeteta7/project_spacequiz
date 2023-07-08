<?php

namespace App\Http\Controllers\estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partida;

use App\Models\Users;
use Illuminate\Support\Facades\DB;


class ResultadoController extends Controller
{

    public function calcular_puntaje(Request $request){
        $valor_respuestas=$request->respuestas;
        $puntaje=0;
        foreach ($valor_respuestas as $id_pregunta => $estado) {
            if ($estado==='1') {
                $puntaje=$puntaje+100;
            }
        }
        $id_partida=$request -> id_partida;
        $auth_usuario=auth()->id();
        #$partida =Partida::find($id_partida);
        
       # $partida->User()->attach($auth_usuario,['puntajes'=>$puntaje]);

        return dd($request);
        #return view('estudiante.juego',compact());
    }
    
    public function resultado_juego(Request $request){

        $id_pregunta =$request->pregunta;

        $respuesta_elegida=$request->texto_respuesta;
      #  $respuesta_elegida[$id_pregunta]=$request->texto_respuesta;
      
      
        $valor_respuesta=$request->respuestas;

        $array_id=[];
        foreach ($id_pregunta as $id => $value) {
            $array_id[]=$id;
        }


        $respuestas =DB::table('respuestas')
        ->select('respuestas.respuesta','respuestas.estado','respuestas.id_pregunta','preguntas.pregunta')
        ->join('preguntas','respuestas.id_pregunta','=','preguntas.id_pregunta')
        ->whereIn('respuestas.id_pregunta',$array_id)
        ->get();

        $array_respuestas=[];
        foreach ($respuestas as $respuesta) {
            $array_respuestas[$respuesta->id_pregunta][$respuesta->pregunta][$respuesta->respuesta]=$respuesta->estado;
        }
#return dd($array_respuestas);
     return view('estudiante.resultados',compact('array_respuestas','respuesta_elegida'));
    }



}
