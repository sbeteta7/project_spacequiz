<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;

    protected $fillable = [
        'pais'
    ];



    public function user(): HasMany
    {
        return $this->HasMany('App\Models\User','id_pais','id_pais');
    }
}

