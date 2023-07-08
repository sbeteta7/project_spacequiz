<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    use HasFactory;
    protected $primaryKey='id_rol';
    protected $fillable = [
        'rol'
    ];



    public function user(): HasMany
    {
        return $this->HasMany('App\Models\User','id_rol','id_rol');
    }
}