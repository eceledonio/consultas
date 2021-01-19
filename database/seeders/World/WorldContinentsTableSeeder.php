<?php

namespace Database\Seeders\World;

use Illuminate\Database\Seeder;

class WorldContinentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('world_continents')->truncate();

        \DB::table('world_continents')->insert([
            0 =>
            [
                'code' => 'as',
                'id' => 1,
                'name' => 'Asia',
            ],
            1 =>
            [
                'code' => 'eu',
                'id' => 2,
                'name' => 'Europe',
            ],
            2 =>
            [
                'code' => 'af',
                'id' => 3,
                'name' => 'Africa',
            ],
            3 =>
            [
                'code' => 'oc',
                'id' => 4,
                'name' => 'Oceania',
            ],
            4 =>
            [
                'code' => 'an',
                'id' => 5,
                'name' => 'Antarctica',
            ],
            5 =>
            [
                'code' => 'na',
                'id' => 6,
                'name' => 'North America',
            ],
            6 =>
            [
                'code' => 'sa',
                'id' => 7,
                'name' => 'South America',
            ],
        ]);
    }
}
