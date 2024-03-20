<?php

namespace App\Http\Controllers\comite;
use App\Http\Controllers\Controller;
use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Especialidad;
use App\Models\Modulo;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::pluck('respuesta','estado');
        return view('comite.comiteListado',compact('preguntas','respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especialidad=Especialidad::all();
        $curso=Curso::all();
        $modulo=Modulo::all();
        $ciclo=Ciclo::all();
        return view('comite.comiteNueva',compact('especialidad','curso','modulo','ciclo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pregunta'=>'required',
            'especialidad'=>'required',
            'ciclo'=>'required',
            'curso'=>'required',
            'modulo'=>'required'
        ]);

        $pregunta = $request->pregunta;
        $especialidad = $request->especialidad;
        $ciclo = $request->ciclo;
        $curso = $request->curso;
        $modulo = $request->modulo;

        DB::insert('insert into preguntas (pregunta,id_especialidad,id_ciclo,id_curso, id_modulo) 
        values (?, ?, ?, ?, ?)', [$pregunta, $especialidad, $ciclo, $curso, $modulo]);

        return redirect()->route('preguntas.create')->with('success','Pregunta ingresada');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pregunta $pregunta, Respuesta $respuesta)
    {
        $id_pregunta=$pregunta->id_pregunta;

        $preguntasJoin=DB::table('preguntas')
            ->select('preguntas.pregunta','respuestas.respuesta','respuestas.estado','preguntas.id_especialidad','especialidades.especialidad',
                     'preguntas.id_curso','cursos.curso','preguntas.id_ciclo','ciclos.ciclo','preguntas.id_modulo','modulos.modulo')
            ->join('respuestas','preguntas.id_pregunta','=','respuestas.id_pregunta')
            ->join('especialidades','especialidades.id_especialidad','=','preguntas.id_especialidad')
            ->join('ciclos','ciclos.id_ciclo','=','preguntas.id_ciclo')
            ->join('modulos','modulos.id_modulo','=','preguntas.id_modulo')
            ->join('cursos','cursos.id_curso','=','preguntas.id_curso')
            ->where('preguntas.id_pregunta','=',$id_pregunta)
            ->get();

        $respuestasArray = [];

        foreach ($preguntasJoin as $pregunta) 
        {
            $respuestasArray[] = $pregunta->respuesta;
        }
        list($preg1, $preg2, $preg3, $preg4) = $respuestasArray;

        $estadosArray = [];
        foreach ($preguntasJoin as $estado) 
        {
            $estadosArray[] = $estado->estado;
        }
        $especialidades = Especialidad::all();
        $cursos = Curso::all();
        $ciclos = Ciclo::all();
        $modulos = Modulo::all();
        // dd($preguntasJoin);
        // dd($pregunta);
        // dd($estadosArray);

        return view('comite.comiteEditar', ['pregunta' => $pregunta,'respuesta' => $respuesta] ,compact('preg1','preg2','preg3','preg4','preguntasJoin', 'especialidades','cursos','ciclos','modulos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        $pregunta->pregunta = $request->pregunta;
        $pregunta->id_especialidad = $request->id_especialidad;
        $pregunta->id_curso = $request->id_curso;
        $pregunta->id_ciclo = $request->id_ciclo;
        $pregunta->id_modulo = $request->id_modulo;

        $pregunta->save();

        $respuestas = Respuesta::where('id_pregunta', $pregunta->id_pregunta)->get();
        foreach ($respuestas as $index => $respuesta) 
        {
            $respuesta->respuesta = $request->input('respuesta' . ($index + 1));
            $respuesta->estado = $request->input('estado' . ($index + 1));
            $respuesta->save();
        }

        return redirect()->route('preguntas.listado')->with('success','Pregunta ingresada');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pregunta $id_pregunta)
    {
        $id_pregunta->delete();
        return redirect('/listado');
    }
}