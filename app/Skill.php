<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Skill
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $date
 * @property int $village_id
 * @property int $inhabitant_id
 * @property int $target_id
 * @property-read \App\Inhabitant $inhabitant
 * @property-read \App\Inhabitant $target
 * @property-read \App\Village $village
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereInhabitantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereVillageId($value)
 * @mixin \Eloquent
 */
class Skill extends Model
{
    protected $fillable = [
        'date',
        'village_id',
        'inhabitant_id',
        'target_id',
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
