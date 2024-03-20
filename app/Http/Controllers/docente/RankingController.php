<?php

namespace App\Http\Controllers\docente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class RankingController extends Controller
{
    public function create_ranking(Request $request){
        
        $id_partida=$request->id_partida;
        dd($id_partida);
        $consulta_estadistica=DB::table('estadistica')
        ->select('id_partida','id_usuario','puntajes')
        ->where('id_partida','=',$id_partida)
        ->get();

        $partida=Partida();

        

       return view('docente.ranking');
    }
}
