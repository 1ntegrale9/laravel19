<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Remark;
use App\Village;
use App\Inhabitant;

$factory->define(Remark::class, function (Faker $faker) {
    return [
        'village_id' => function () {
            return factory(Village::class)->create()->id;
        },
        'inhabitant_id' => function () {
            return factory(Inhabitant::class)->create()->id;
        },
        'date' => 0,
        'body' => "発言",
    ];
});
