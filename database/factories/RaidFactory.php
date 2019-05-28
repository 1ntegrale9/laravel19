<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Raid;
use App\Village;
use App\Inhabitant;

$factory->define(Raid::class, function (Faker $faker) {
    return [
        'date' => 0,
        'village_id' => function () {
            return factory(Village::class)->create()->id;
        },
        'inhabitant_id' => function () {
            return factory(Inhabitant::class)->create()->id;
        },
        'target_id' => function () {
            return factory(Inhabitant::class)->create()->id;
        },
    ];
});
