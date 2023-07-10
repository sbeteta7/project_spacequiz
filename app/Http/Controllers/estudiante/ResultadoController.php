<?php

namespace App\Http\Controllers\estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partida;

use App\Models\Users;
use Illuminate\Support\Facades\DB;


class ResultadoController extends Controller
{
    public function procesar_form_juego(Request $request){
        $request=$request->except('_token');
        $this->estado_partida($request);

    }

    //METODO ESTADO PARTIDA
    public function cambiar_estado_partidaxuser($id_partida,$id_usuario){

        $partida_usuario = DB::table('estadistica')
            ->select('estado')
            ->where('id_usuario', $id_usuario)
            ->where('id_partida',$id_partida)
            ->first();
        
        if ($partida_usuario && $partida_usuario->estado !== 0) {
            
            abort(403, 'Acceso no autorizado');
        }

        $partida = Partida::findOrFail($id_partida);
        $partida->User()->updateExistingPivot($id_usuario,['estado' => 1]);

      //  $new_request=collect($request->request)->except('_token');
        //$mi_objeto = json_decode(json_encode($new_request));
    }




//Calcular puntaje y creacion de tabla intermedia estadistica
    public function calcular_puntaje(Request $request){
//dd($request['respuestas']);
        $id_partida=$request['id_partida'];
 

        if (isset($request['respuestas'])) {
            $consulta_respuesta =DB::table('respuestas')
            ->selectRaw('count(estado) as correctos')
            ->groupBy('estado')
            ->having('estado','=',1)
            ->whereIn('respuesta',$request['respuestas'])
            ->get();
        
   // dd($consulta_respuesta);        

            if (is_null($consulta_respuesta->first())) {
               $puntaje=0;
               $respuestas_correctas=0;
            }else{
                $respuestas_correctas=$consulta_respuesta->first()->correctos;
                $puntaje=$respuestas_correctas*100;
            }
        } else {
            $puntaje=0;
            $respuestas_correctas=0;

        }

  

        $auth_usuario=auth()->id();
        $partida =Partida::find($id_partida);
        
        $partida->User()->attach($auth_usuario,['puntajes'=>$puntaje]);

        $this->cambiar_estado_partidaxuser($id_partida,$auth_usuario);

return redirect()->route('resultado')->withInput([$request->except('_token'),'puntajes'=>$puntaje,'respuestas_correctas'=>$respuestas_correctas]);


        }
        


    
    public function resultado_juego(Request $request){
        
        $new_request = $request->old();
       $datos=reset($new_request);

       $puntajes = $new_request['puntajes'];
       $respuestas_correctas = $new_request['respuestas_correctas'];
        
        $tiempo_terminado=$datos['tiempo_terminado'];
   
        $id_pregunta=$datos['pregunta'];


        if (isset($datos['respuestas'])){
            $respuesta_elegida=$datos['respuestas'];
        }else{
            $respuesta_elegida=null;
        }

        
      // dd($respuesta_elegida);
        
        

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
        $respuestas_incorrectas=$num_preguntas-$respuestas_correctas;


        $respuestas =DB::table('respuestas')
        ->select('respuesta','estado','id_pregunta')
        ->whereIn('id_pregunta',$array_id)
        ->get();

        $array_respuestas=[];
        foreach ($respuestas as $respuesta) {
            $array_respuestas[$respuesta->id_pregunta][$datos['pregunta'][$respuesta->id_pregunta]][$respuesta->respuesta]=$respuesta->estado;
        }
//dd($array_respuestas);
       

        
    return view('estudiante.resultados',compact('array_respuestas','respuesta_elegida','puntajes','duracion','num_preguntas','tiempo_terminado','respuestas_correctas','respuestas_incorrectas'));

    }



}    
