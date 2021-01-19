<?php

namespace Tests\Feature\Backend\Role;

use App\Events\Role\RoleCreated;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

/**
 * Class CreateRoleTest.
 */
class CreateRoleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_the_create_role_page()
    {
        $this->loginAsAdmin();

        $this->get('/admin/auth/role/create')->assertOk();
    }

    /** @test */
    public function create_role_requires_validation()
    {
        $this->loginAsAdmin();

        $response = $this->post('/admin/auth/role');

        $response->assertSessionHasErrors('name', 'description');
    }

    /** @test */
    public function the_name_must_be_unique()
    {
        $this->loginAsAdmin();

        $response = $this->post('/admin/auth/role', ['name' => config('boilerplate.access.role.admin')]);

        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_role_can_be_created()
    {
        Event::fake();

        $this->loginAsAdmin();

        $this->post('/admin/auth/role', [
            'name' => 'new role',
            'description' => 'new role description',
            'permissions' => [
                Permission::whereName('dashboard.read')->first()->id,
            ],
        ]);

        $this->assertDatabaseHas('roles', [
            'name' => 'new role',
            'description' => 'new role description',
        ]);

        $this->assertDatabaseHas('role_has_permissions', [
            'permission_id' => Permission::whereName('dashboard.read')->first()->id,
            'role_id' => Role::whereName('new role')->first()->id,
        ]);

        Event::assertDispatched(RoleCreated::class);
    }

    /** @test */
    public function only_admin_can_create_roles()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get('/admin/auth/role/create');

        $response->assertSee('No está autorizado para ejecutar esa acción');
    }
}
