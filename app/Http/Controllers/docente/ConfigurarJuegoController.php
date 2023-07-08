<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use App\Models\Partida;
use App\Models\Preguntas;
use App\Models\Respuestas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigurarJuegoController extends Controller
{

    public function configurar_juego(){
        $especialidades =DB::table('especialidades')
        ->get();

        $cursos =DB::table('curso')
        ->get();

        $ciclos =DB::table('ciclo')
        ->get();

        $modulos =DB::table('modulo')
        ->get();
        return view('docente.configuracion',compact('especialidades','cursos','ciclos','modulos'));
    }

    

    public function seleccionar_preguntas(Request $request){
#ELEGIR COMBO DE PREGUNTAS      
        $especialidad =$request->especialidad;

        $ciclo =$request->ciclo; 
        $curso =$request->curso;
        $modulo =$request->modulo;


        $preguntas =DB::table('preguntas')
                    ->select('id_pregunta')
                #    ->join('respuestas','preguntas.id_pregunta','=','respuestas.id_pregunta')
                    ->where('id_especialidad','=',$especialidad)
                    ->where('id_ciclo','=',$ciclo)
                    ->where('id_curso','=',$curso)
                    ->where('id_modulo','=',$modulo)
                    ->get();

                    foreach ($preguntas as $pregunta) {
                        $resultados[] = $pregunta->id_pregunta;
                    }
#CONFIGURAR Y CREAR PARTIDA                    

        $partida= new Partida;
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $partida->codigo=substr(str_shuffle($permitted_chars), 0, 6);
        $partida->num_preguntas = $request->num_preguntas;
        $partida->duracion = $request->duracion;
        $partida->save();



        $partida->Preguntas()->attach($resultados);

        

        $hola=dd($partida);
    
        /*
        $grupo_pregunta = [];
        foreach ($preguntas as $pregunta) {
            $grupo_pregunta[$pregunta->pregunta][] = $pregunta->respuesta;
        }
*/



        return view('docente.resultado',compact('hola'));

    }

    /*
    public function resultado(Request $request){
        $resultado=dd($request->all());
        return view('docente.resultado','resultado');
    }
*/

/*
    public function crear_juego(Request $request){
        
        $partida= new Partida;
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $partida->codigo=substr(str_shuffle($permitted_chars), 0, 6);
        $partida->num_preguntas = $request->input('num_preguntas');
        $partida->duracion = $request->input('duracion');
        $partida->save();




        $id_partida = $partida ->id;
        $objeto_partida= Partida::find($id_partida);
        $objeto_partida->Preguntas()->attach('id_pregunta');


        return view('docente.resultado',compact('id_partida'));


    }

    */


}

