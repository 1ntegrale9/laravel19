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
        factory(Village::class, 3)->create()->each(function ($village) {
            factory(Inhabitant::class, 10)->create(['village_id' => $village->id])->each(function ($inhabitant) {
                factory(Remark::class, 2)->create(['inhabitant_id' => $inhabitant->id, 'village_id' => $inhabitant->village_id]);
            });
        });
    }
}
