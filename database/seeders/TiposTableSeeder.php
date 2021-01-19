<?php

namespace Database\Seeders;

use Database\Seeders\Tipos\SegurosTableSeeder;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

/**
 * Class TiposTableeeder.
 */
class TiposTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->disableForeignKeys();

        $this->truncateMultiple([
            'seguros',
        ]);

        $this->call([
            SegurosTableSeeder::class,
        ]);

        $this->enableForeignKeys();
    }
}
