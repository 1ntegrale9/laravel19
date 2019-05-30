<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Vote
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereInhabitantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vote whereVillageId($value)
 * @mixin \Eloquent
 */
class Vote extends Model
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
