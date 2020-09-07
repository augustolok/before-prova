<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_jogadores extends Model
{
    protected $fillable = [
        'Nome', 'CPF', 'Numerodacamiseta'  
    ];

}
