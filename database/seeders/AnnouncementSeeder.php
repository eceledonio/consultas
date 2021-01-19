<?php

namespace Database\Seeders;

use App\Models\Announcement\Announcement;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

/**
 * Class AnnouncementSeeder.
 */
class AnnouncementSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->disableForeignKeys();

        $this->truncate('announcements');

        if (app()->environment(['local', 'testing'])) {
            /*
             * Note: There is currently no UI for this feature. If you are going to build a UI, and if you are going to use a WYSIWYG editor for the message (because it supports HTML on the frontend) that you properly sanitize the input before it is stored in the database.
             */
            Announcement::create([
                'area' => null,
                'type' => 'primary',
                'message' => 'Esto es un anuncio <strong>Global</strong> que se mostrará tanto en el frontend como en el backend.<em>Ver <strong>AnnouncementSeeder</strong> para más ejemplos de uso.</em>',
                'enabled' => true,
            ]);

            Announcement::create([
                'area' => 'frontend',
                'type' => 'warning',
                'message' => 'Esto es un anuncio en el <strong>Frontend</strong> que no se mostrará en el Backend.',
                'enabled' => true,
            ]);

            Announcement::create([
                'area' => 'backend',
                'type' => 'danger',
                'message' => 'Esto es un anuncio del <strong>Backend</strong> que no se mostrará en el Frontend.',
                'enabled' => true,
            ]);
//
//            Announcement::create([
//                'area' => null,
//                'type' => 'danger',
//                'message' => 'Este anuncio se mostrará porque la hora actual se encuentra entre las fechas de inicio y finalización.' ,
//                'enabled' => true,
//                'starts_at' => now()->subWeek(),
//                'ends_at' => now()->addWeek()
//            ]);
//
//            Announcement::create([
//                'area' => null,
//                'type' => 'danger',
//                'message' => 'Este anuncio no se mostrará porque está deshabilitado.' ,
//                'enabled' => false,
//            ]);
//
//            Announcement::create([
//                'area' => null,
//                'type' => 'danger',
//                'message' => 'Este anuncio no se mostrará porque ha pasado la fecha de finalización.' ,
//                'enabled' => true,
//                'ends_at' => now()->subDay()
//            ]);
//
//            Announcement::create([
//                'area' => null,
//                'type' => 'danger',
//                'message' => 'Este anuncio no se mostrará porque la hora actual no se encuentra entre las fechas de inicio y finalización.' ,
//                'enabled' => true,
//                'starts_at' => now()->subWeek(),
//                'ends_at' => now()->subDay()
//            ]);
        }

        $this->enableForeignKeys();
    }
}
