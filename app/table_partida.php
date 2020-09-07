<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_partida extends Model
{
    protected $fillable = [
        'Horarioinicio',  'Horariotermino','timesid1','timesid2'
    ];

}
