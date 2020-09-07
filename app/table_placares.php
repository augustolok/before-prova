<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_placares extends Model
{
    protected $fillable = [
        'gol',  'jogadorid','timeid','partidaid'
    ];
}
