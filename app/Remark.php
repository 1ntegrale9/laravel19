<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Remark
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $body
 * @property int|null $date
 * @property int $village_id
 * @property int $inhabitant_id
 * @property-read \App\Inhabitant $inhabitant
 * @property-read \App\Village $village
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereInhabitantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Remark whereVillageId($value)
 * @mixin \Eloquent
 */
class Remark extends Model
{
    protected $fillable = [
        'body',
        'date',
        'village_id',
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
