<?php

namespace Database\Seeders\World;

use Illuminate\Database\Seeder;

class WorldContinentsLocaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('world_continents_locale')->truncate();

        \DB::table('world_continents_locale')->insert([
            0 =>
            [
                'abbr' => 'AS',
                'alias' => null,
                'continent_id' => 1,
                'full_name' => null,
                'id' => 1,
                'locale' => 'es',
                'name' => 'Asia',
            ],
            1 =>
            [
                'abbr' => 'EU',
                'alias' => null,
                'continent_id' => 2,
                'full_name' => null,
                'id' => 2,
                'locale' => 'es',
                'name' => 'Europa',
            ],
            2 =>
            [
                'abbr' => 'AF',
                'alias' => null,
                'continent_id' => 3,
                'full_name' => null,
                'id' => 3,
                'locale' => 'es',
                'name' => 'África',
            ],
            3 =>
            [
                'abbr' => 'OC',
                'alias' => null,
                'continent_id' => 4,
                'full_name' => null,
                'id' => 4,
                'locale' => 'es',
                'name' => 'Oceanía',
            ],
            4 =>
            [
                'abbr' => 'AN',
                'alias' => null,
                'continent_id' => 5,
                'full_name' => null,
                'id' => 5,
                'locale' => 'es',
                'name' => 'Antártica',
            ],
            5 =>
            [
                'abbr' => 'NA',
                'alias' => null,
                'continent_id' => 6,
                'full_name' => null,
                'id' => 6,
                'locale' => 'es',
                'name' => 'Norte América',
            ],
            6 =>
            [
                'abbr' => 'SA',
                'alias' => null,
                'continent_id' => 7,
                'full_name' => null,
                'id' => 7,
                'locale' => 'es',
                'name' => 'Sur América',
            ],
            7 =>
            [
                'abbr' => 'as',
                'alias' => null,
                'continent_id' => 1,
                'full_name' => null,
                'id' => 8,
                'locale' => 'en',
                'name' => 'Asia',
            ],
            8 =>
            [
                'abbr' => 'eu',
                'alias' => null,
                'continent_id' => 2,
                'full_name' => null,
                'id' => 9,
                'locale' => 'en',
                'name' => 'Europe',
            ],
            9 =>
            [
                'abbr' => 'af',
                'alias' => null,
                'continent_id' => 3,
                'full_name' => null,
                'id' => 10,
                'locale' => 'en',
                'name' => 'Africa',
            ],
            10 =>
            [
                'abbr' => 'oc',
                'alias' => null,
                'continent_id' => 4,
                'full_name' => null,
                'id' => 11,
                'locale' => 'en',
                'name' => 'Oceania',
            ],
            11 =>
            [
                'abbr' => 'an',
                'alias' => null,
                'continent_id' => 5,
                'full_name' => null,
                'id' => 12,
                'locale' => 'en',
                'name' => 'Antarctica',
            ],
            12 =>
            [
                'abbr' => 'na',
                'alias' => null,
                'continent_id' => 6,
                'full_name' => null,
                'id' => 13,
                'locale' => 'en',
                'name' => 'North America',
            ],
            13 =>
            [
                'abbr' => 'sa',
                'alias' => null,
                'continent_id' => 7,
                'full_name' => null,
                'id' => 14,
                'locale' => 'en',
                'name' => 'South America',
            ],
        ]);
    }
}
