<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MasterSkill
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $cliques
 * @property int $species
 * @property bool $can_raid
 * @property bool $can_divine
 * @property bool $can_dissect
 * @property bool $can_escort
 * @property string $symbol
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereCanDissect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereCanDivine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereCanEscort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereCanRaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereCliques($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereSpecies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkill whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MasterSkill extends Model
{
    protected $fillable = [
        'cliques',
        'species',
        'can_raid',
        'can_divine',
        'can_dissect',
        'can_escort',
        'symbol',
        'name',
    ];
}
