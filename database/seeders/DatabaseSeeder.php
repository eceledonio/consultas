<?php

namespace Database\Seeders;

use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'failed_jobs',
            'ledgers',
            'jobs',
            'sessions',
        ]);

        $this->call([
            SettingsTableSeeder::class,
            AuthTableSeeder::class,
            AnnouncementSeeder::class,
            WorldTableSeeder::class,
            TiposTableSeeder::class,
        ]);

        Model::reguard();
    }
}
