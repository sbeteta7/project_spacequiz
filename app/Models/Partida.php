<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    protected $table ='partida';
    protected $primaryKey='id_partida';
    protected $fillable = [
        'duracion',
        'num_preguntas',
        'codigo',
        'estado'
    ];

    public function Preguntas(){
        return $this->belongsToMany('App\Models\Preguntas','partida_preguntas','id_partida','id_pregunta');
    }


    public function User(){
        return $this->belongsToMany('App\Models\User','estadistica','id_partida','id_usuario');
    }
    
}
