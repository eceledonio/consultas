<?php

namespace Database\Seeders;

use Database\Seeders\World\WorldCitiesLocaleTableSeeder;
use Database\Seeders\World\WorldCitiesTableSeeder;
use Database\Seeders\World\WorldContinentsLocaleTableSeeder;
use Database\Seeders\World\WorldContinentsTableSeeder;
use Database\Seeders\World\WorldCountriesLocaleTableSeeder;
use Database\Seeders\World\WorldCountriesTableSeeder;
use Database\Seeders\World\WorldDivisionsLocaleTableSeeder;
use Database\Seeders\World\WorldDivisionsTableSeeder;
use Database\Seeders\World\WorldLanguagesTableSeeder;
use Illuminate\Database\Seeder;

class WorldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorldContinentsTableSeeder::class);
        $this->call(WorldContinentsLocaleTableSeeder::class);
        $this->call(WorldCountriesTableSeeder::class);
        $this->call(WorldCountriesLocaleTableSeeder::class);
        $this->call(WorldDivisionsTableSeeder::class);
        $this->call(WorldDivisionsLocaleTableSeeder::class);
        $this->call(WorldCitiesTableSeeder::class);
        $this->call(WorldCitiesLocaleTableSeeder::class);
        $this->call(WorldLanguagesTableSeeder::class);
    }
}
