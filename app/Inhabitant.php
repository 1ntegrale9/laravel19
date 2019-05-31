<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Inhabitant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool $is_dead
 * @property int $skill_id
 * @property int $user_id
 * @property int $village_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Raid[] $raids
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Remark[] $remarks
 * @property-read \App\MasterSkill $skill
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Skill[] $skills
 * @property-read \App\User $user
 * @property-read \App\Village $village
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Vote[] $votes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereIsDead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inhabitant whereVillageId($value)
 * @mixin \Eloquent
 */
class Inhabitant extends Model
{
    protected $fillable = [
        'skill_id',
        'user_id',
        'village_id',
        'is_dead',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function skill()
    {
        return $this->belongsTo('App\MasterSkill', 'master_skills_id');
    }

    public function village()
    {
        return $this->belongsTo('App\Village');
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
