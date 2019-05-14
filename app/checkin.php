<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkin extends Model
{
    protected $fillable = [
        'studentname','time','checkintime','teachername'
    ];

    protected $casts = [
        'created_at'   => 'date:Y-m-d',
    ];
}
