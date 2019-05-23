<?php

use Illuminate\Database\Seeder;
use App\Village;
use App\Remark;

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
                $remarks = factory(App\Remark::class, 2)->make();
                $village->remarks()->saveMany($remarks);
            });
    }
}
