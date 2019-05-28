<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inhabitant extends Model
{
    protected $fillable = [
        'skill',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

   public function remarks()
    {
        return $this->hasMany('App\Remark');
    }

     public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function raids()
    {
        return $this->hasMany('App\Raid');
    }

    public function skills()
    {
        return $this->hasMany('App\Skill');
    }
}
