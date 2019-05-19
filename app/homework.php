<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    //
    protected $fillable = [
        'teachername', 'homeworkname', 'studentname', 'studentusername', 'file'
    ];
}
