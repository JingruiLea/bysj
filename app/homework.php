<?php

namespace App;

use App\Traits\ActionButtonAttributeTrait;
use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    use ActionButtonAttributeTrait;
    //
    protected $fillable = [
        'teachername', 'homeworkname', 'studentname', 'studentusername', 'file'
    ];
}
