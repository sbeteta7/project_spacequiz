<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table ='profesor';
    protected $fillable = [
        'nombre',
        'apellido',
        'id_usuario',
    ];

    public function usuario()
    {
        return $this->hasOne('App\Models\User','id_usuario','id_usuario');
    }
}
