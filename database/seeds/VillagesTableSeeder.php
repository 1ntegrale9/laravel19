<?php

use Illuminate\Database\Seeder;
use App\Village;
use App\Inhabitant;
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
        factory(Village::class, 3)
            ->create()
            ->each(function ($village) {
                $inhabitants = factory(Inhabitant::class, 10)->make();
                foreach ($inhabitants as $inhabitant) {
                    $village->inhabitants()->save($inhabitant);
                    $remarks = factory(Remark::class, 2)->make();
                    $inhabitant->remarks()->saveMany($remarks);
                }
            }
        );
    }
}
