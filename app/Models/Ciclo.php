<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciclo extends Model
{
    use HasFactory;
    protected $table='ciclo';
    protected $fillable = [
        'ciclo'
    ];

    public function pregunta(): HasMany
    {
        return $this->hasMany('App\Models\Preguntas','id_curso','id_curso');
    }
}