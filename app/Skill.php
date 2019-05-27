<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'date',
    ];

    public function village()
    {
        return $this->belongsTo('App\Village');
    }

    public function inhabitant()
    {
        return $this->belongsTo('App\Inhabitant');
    }

    public function target()
    {
        return $this->belongsTo('App\Inhabitant');
    }
}
