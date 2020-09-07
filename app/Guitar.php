<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    
    protected $fillable = [
            'nome_modello',
            'manico',
            'pickup',
            'colore',
            'ponte',
            'codice_id'
        ];
}
