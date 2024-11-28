<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pessoa extends Model
{
    protected $fillable=[
        'nome',
        'idade',

    ];

    public function carro():HasMany
    {
        return $this->hasMany(Carro::class);
    }
}
