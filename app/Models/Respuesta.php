<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Respuesta extends Model
{
    use HasFactory;
    protected $table='respuestas';
    protected $fillable = [
        'id_pregunta',
        'respuestas',
        'estado'
    ];

    public function preguntas()
    {
        return $this->belongsTo(Pregunta::class,'id_pregunta','id_pregunta');
    }

}