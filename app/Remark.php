<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $fillable = [
        'body',
        'date',
        'inhabitant_id',
    ];

    public function village()
    {
        return $this->belongsTo('App\Village');
    }

    public function inhabitant()
    {
        return $this->belongsTo('App\Inhabitant');
    }
}
