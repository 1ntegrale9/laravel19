<?php

use Illuminate\Database\Seeder;
use App\MasterSkills;

class MasterSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('const.SKILLS') as $e) {
            MasterSkills::firstOrCreate([
                'id' => $e[0]
            ], [
                'cliques' => $e[1],
                'species' => $e[2],
                'can_raid' => $e[3],
                'can_divine' => $e[4],
                'can_dissect' => $e[5],
                'can_escort' => $e[6],
                'symbol' => $e[7],
                'name' => $e[8],
            ]);
        };
    }
}
