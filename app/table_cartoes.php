<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_cartoes extends Model
{
    protected $fillable = [
        'jogadorid', 'timeid','partidaid' 
    ];
}
