<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_elencos extends Model
{
    protected $fillable = [
        'jogadorid', 'timeid' 
    ];

}
