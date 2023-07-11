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

       
  #      $id_partida=$array_preguntas->first()->id_partida;

     #   $this->acceso_partida($id_partida);
        foreach ($array_preguntas as $array_pregunta) {

            $valores[] = $array_pregunta->id_pregunta;
            $id_partida = $array_pregunta->id_partida;
            $total_preguntas=$array_pregunta->num_preguntas;
            $duracion=$array_pregunta->duracion;
        }
        $this->acceso_partida($id_partida);
        
  
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



       return view('estudiante.juego',compact('grupo_pregunta','id_partida','duracion','total_preguntas'));


    }
        //METODO ESTADO PARTIDA
        public function acceso_partida($id_partida){
            $auth_usuario=auth()->id();

            $partida_usuario = DB::table('estadistica')
                ->select('estado')
                ->where('id_usuario', $auth_usuario)
                ->where('id_partida',$id_partida)
                ->first();
            
            if ($partida_usuario && $partida_usuario->estado !== 0) {
                abort(403, 'Acceso no autorizado');
            }

            

            
        }
    




}

