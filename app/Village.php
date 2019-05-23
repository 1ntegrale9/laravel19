<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    public function remarks()
    {
        return $this->hasMany('App\Remark');
    }
}
