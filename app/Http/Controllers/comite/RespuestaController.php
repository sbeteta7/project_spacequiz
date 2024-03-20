<?php

namespace App\Http\Controllers\comite;
use App\Http\Controllers\Controller;
use App\Models\Respuesta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $id_pregunta=DB::table('preguntas')
        ->max('id_pregunta');
        $respuesta1=Respuesta::all();
        $respuesta2=Respuesta::all();
        $respuesta3=Respuesta::all();
        $respuesta4=Respuesta::all();
        return view('comite.comiteNuevaRespuesta',compact('respuesta1','respuesta2','respuesta3','respuesta4','id_pregunta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {     
        $request->validate([
            'estado'=>'required',
            'respuesta1'=>'required',
            'respuesta2'=>'required',
            'respuesta3'=>'required',
            'respuesta4'=>'required',
        ]);

        $id_pregunta=DB::table('preguntas')
        ->max('id_pregunta');

        $estado=$request->estado;
        $estado1=0;
        $estado2=0;
        $estado3=0;
        $estado4=0;

        switch ($estado)
        {
            case 1:
                $estado1=1;
                break;
            case 2:
                $estado2=1;
                break;
            case 3:
                $estado3=1;
                break;
            case 4:
                $estado4=1;
                break;
        }

        $respuesta1=$request->respuesta1;
        $respuesta2=$request->respuesta2;
        $respuesta3=$request->respuesta3;
        $respuesta4=$request->respuesta4;
        
        DB::insert('insert into respuestas (id_pregunta, respuesta, estado) 
        values (?, ?, ?)', [$id_pregunta, $respuesta1, $estado1]);
        DB::insert('insert into respuestas (id_pregunta, respuesta, estado) 
        values (?, ?, ?)', [$id_pregunta, $respuesta2, $estado2]);
        DB::insert('insert into respuestas (id_pregunta, respuesta, estado) 
        values (?, ?, ?)', [$id_pregunta, $respuesta3, $estado3]);
        DB::insert('insert into respuestas (id_pregunta, respuesta, estado) 
        values (?, ?, ?)', [$id_pregunta, $respuesta4, $estado4]);

        return redirect()->route('preguntas.listado')->with('success','Pregunta ingresada');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}