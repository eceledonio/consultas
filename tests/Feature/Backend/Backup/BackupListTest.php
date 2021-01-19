<?php

namespace Tests\Feature\Backend\Backup;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class BackupListTest.
 */
class BackupListTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_access_backup_list()
    {
        $this->loginAsAdmin();

        $this->get('/admin/backup')->assertOk();
    }
}
