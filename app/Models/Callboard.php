<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Traits\TransformableTrait;
use App\Traits\ActionButtonAttributeTrait;

class Callboard extends Model
{
    use ActionButtonAttributeTrait;

    private $action = 'callboard';

    protected $table = 'callboard';

    protected $fillable = ['pid','title','author_name','url','content','created_at'];

    protected $casts = [
        'created_at'   => 'date:Y-m-d',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}
