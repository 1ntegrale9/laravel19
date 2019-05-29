<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
        'title',
        'body',
        'date',
        'user_id',
        'winner',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function inhabitants()
    {
        return $this->hasMany('App\Inhabitant');
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
