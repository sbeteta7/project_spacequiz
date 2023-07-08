<?php

namespace App\Http\Controllers\estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partida;

use App\Models\Users;
use Illuminate\Support\Facades\DB;


class ResultadoController extends Controller
{
//Calcular puntaje y creacion de tabla intermedia estadistica
    public function calcular_puntaje(Request $request){
return dd($request);
        $respuestas =DB::table('respuestas')
        ->selectRaw('count(estado) as correctos')
        ->groupBy('estado')
        ->having('estado','=',1)
        ->whereIn('respuesta',$request['respuestas'])
        ->get();
        
        $respuestas_correctas=$respuestas[0]->correctos;
        
        $puntaje=$respuestas_correctas*100;


        $id_partida=$request -> id_partida;
        $auth_usuario=auth()->id();
        $partida =Partida::find($id_partida);
        
        $partida->User()->attach($auth_usuario,['puntajes'=>$puntaje]);



        #return to_route('resultado',['puntaje'=>$puntaje]);
        
    #return redirect()->route('resultado')->with(['datos' => $request->except('_token'), 'puntajes' => $puntaje]);

   #return redirect()->route('resultado')->withInput([$request->except('_token'),'puntajes'=>$puntaje,'respuestas_correctas'=>$respuestas_correctas]);



        }
        


    
    public function resultado_juego(Request $request){
        
        $new_request = $request->old();
        $datos=$new_request[0];
        $puntaje=$new_request['puntajes'];
        $id_pregunta=$datos['pregunta'];
        $respuesta_elegida=$datos['respuestas'];
        $id_partida=$datos['id_partida'];

        $array_id=[];
        foreach ($id_pregunta as $id => $value) {
            $array_id[]=$id;
        }

        $datos_partida =DB::table('partida')
        ->select('duracion','num_preguntas')
        ->where('id_partida',$id_partida)
        ->get();

        $duracion= $datos_partida[0]->duracion;
        $num_preguntas=$datos_partida[0]->num_preguntas;



        $respuestas =DB::table('respuestas')
        ->select('respuesta','estado','id_pregunta')
        ->whereIn('id_pregunta',$array_id)
        ->get();

        $array_respuestas=[];
        foreach ($respuestas as $respuesta) {
            $array_respuestas[$respuesta->id_pregunta][$datos['pregunta'][$respuesta->id_pregunta]][$respuesta->respuesta]=$respuesta->estado;
        }

      # return dd($respuesta_elegida);


   return view('estudiante.resultados',compact('array_respuestas','respuesta_elegida','puntaje','duracion','num_preguntas'));

    }



}    
