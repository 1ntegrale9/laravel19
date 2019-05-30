<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MasterSkills
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $cliques
 * @property int $species
 * @property int $can_raid
 * @property int $can_divine
 * @property int $can_dissect
 * @property int $can_escort
 * @property string $symbol
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereCanDissect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereCanDivine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereCanEscort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereCanRaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereCliques($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereSpecies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MasterSkills whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MasterSkills extends Model
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
