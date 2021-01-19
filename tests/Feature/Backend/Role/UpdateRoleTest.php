<?php

namespace Tests\Feature\Backend\Role;

use App\Events\Role\RoleUpdated;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

/**
 * Class UpdateRoleTest.
 */
class UpdateRoleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_name_is_required()
    {
        $role = Role::factory()->create();

        $this->loginAsAdmin();

        $response = $this->patch("/admin/auth/role/{$role->id}");

        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_role_name_can_be_updated()
    {
        Event::fake();

        $role = Role::factory()->create();

        $this->loginAsAdmin();

        $this->patch("/admin/auth/role/{$role->id}", [
            'name' => 'new name',
            'description' => 'new name description',
            'permissions' => [
                Permission::whereName('roles.create')->first()->id,
            ],
        ]);

        $this->assertDatabaseHas('roles', [
            'name' => 'new name',
        ]);

        $this->assertDatabaseHas('role_has_permissions', [
            'permission_id' => Permission::whereName('roles.create')->first()->id,
            'role_id' => Role::whereName('new name')->first()->id,
        ]);

        Event::assertDispatched(RoleUpdated::class);
    }

    /** @test */
    public function the_admin_role_can_not_be_updated()
    {
        $this->loginAsAdmin();

        $role = Role::whereName(config('boilerplate.access.role.admin'))->first();

        $response = $this->patch("/admin/auth/role/{$role->id}", [
            'name' => 'new name',
        ]);

        $response->assertSessionHas(['flash_danger' => __('No puedes modificar el perfil de administrador.')]);

        $this->assertDatabaseMissing('roles', [
            'name' => 'new name',
        ]);
    }

    /** @test */
    public function only_admin_can_edit_roles()
    {
        $this->loginAsAdmin();

        $role = Role::factory()->create(['name' => 'current name']);

        $this->get("/admin/auth/role/{$role->id}/edit")->assertOk();
    }

    /** @test */
    public function the_admin_role_can_not_be_edited()
    {
        $this->loginAsAdmin();

        $role = Role::whereName(config('boilerplate.access.role.admin'))->first();

        $response = $this->get("/admin/auth/role/{$role->id}/edit");

        $response->assertSessionHas(['flash_danger' => __('No puedes modificar el Perfil de Administrador.')]);
    }

    /** @test */
    public function a_non_admin_can_not_edit_roles()
    {
        $this->actingAs(User::factory()->create());

        $role = Role::factory()->create(['name' => 'current name']);

        $response = $this->get("/admin/auth/role/{$role->id}/edit");

        $response->assertSee(__('No está autorizado para ejecutar esa acción'));
    }

    /** @test */
    public function only_admin_can_update_roles()
    {
        $this->actingAs(User::factory()->create());

        $role = Role::factory()->create(['name' => 'current name']);

        $response = $this->patch("/admin/auth/role/{$role->id}", [
            'name' => 'new name',
        ]);

        $response->assertSee(__('No está autorizado para ejecutar esa acción'));

        $this->assertDatabaseHas(config('permission.table_names.roles'), [
            'id' => $role->id,
            'name' => 'current name',
        ]);
    }
}
