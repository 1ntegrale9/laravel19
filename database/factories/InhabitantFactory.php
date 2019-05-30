<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Inhabitant;
use App\User;
use App\Village;

$factory->define(Inhabitant::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'village_id' => function () {
            return factory(Village::class)->create()->id;
        },
        'skill_id' => 1,
    ];
});
