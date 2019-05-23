<?php

use Illuminate\Database\Seeder;
use App\Village;
use App\Comment;

class VillagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Village::class, 50)
            ->create()
            ->each(function ($village) {
                $comments = factory(App\Comment::class, 2)->make();
                $village->comments()->saveMany($comments);
            });
    }
}
