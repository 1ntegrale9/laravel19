# database/migrations/UserFactory.php
<?php

use Faker\Generator as Faker;

$factory->define(App\Remark::class, function (Faker $faker) {
    return [
        'body' => "コメントです。テキストテキストテキストテキストテキストテキスト。\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。",
    ];
});
