<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $primaryKey ='id_pregunta';
    protected $fillable = [
        'pregunta',
        'estado',
        'id_especialidad',
        'id_ciclo',
        'id_curso',
        'id_modulo'
    ];

    public function especialidad()
    {
        return $this->belongsTo('App\Models\Especialidad','id_especialidad','id_especialidad');
    }

    public function modulo()
    {
        return $this->belongsTo('App\Models\modulo','id_modulo','id_modulo');
    }

    public function ciclo()
    {
        return $this->belongsTo('App\Models\Ciclo','id_ciclo','id_ciclo');
    }

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso','id_curso','id_curso');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class,'id_pregunta','id_pregunta');
    }

    protected function Partida(){
        return $this->belongsToMany('App\Models\Partida','partida_preguntas','id_pregunta','id_partida');
    }
    
}

