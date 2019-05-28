<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Village;
use App\User;

$factory->define(Village::class, function (Faker $faker) {
    return [
        'title' => '村の名前',
        'body' => '村の詳細',
        'date' => 0,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
