<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    //
    protected $fillable = [
        'name', 'username', 'sex', 'nation', 'address', 'birthday','phone', 'qq','photo'
    ];
}
