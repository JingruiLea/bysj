<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classfee extends Model
{
    //
    protected $fillable = [
        'type','amount','last','note'
    ];

    protected $casts = [
        'created_at'   => 'date:Y-m-d',
    ];
}
