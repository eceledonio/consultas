<?php

namespace Tests\Feature\Backend\Role;

use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ReadRolesTest.
 */
class ListRoleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_the_role_index_page()
    {
        $this->loginAsAdmin();

        $this->get('/admin/auth/role')->assertOk();
    }

    /** @test */
    public function only_admin_can_view_roles()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get('/admin/auth/role');

        $response->assertSee(__('No está autorizado para ejecutar esa acción'));
    }
}
