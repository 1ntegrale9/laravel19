<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Village
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $body
 * @property int $date
 * @property int|null $winner
 * @property int $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Inhabitant[] $inhabitants
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Raid[] $raids
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Remark[] $remarks
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Skill[] $skills
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Vote[] $votes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Village whereWinner($value)
 * @mixin \Eloquent
 */
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
