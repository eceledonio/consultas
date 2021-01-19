<?php

namespace Tests\Feature\Backend\User;

use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ListUserTest.
 */
class ListUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_a_user_with_correct_permissions_can_list_users()
    {
        $this->actingAs($user = User::factory()->create());

        $user->syncPermissions(['users.read']);

        $this->get('/admin/auth/user')->assertOk();

        $user->syncPermissions([]);

        $response = $this->get('/admin/auth/user');

        $response->assertSee(__('No está autorizado para ejecutar esa acción'));
    }

    /** @test */
    public function only_a_user_with_correct_permissions_can_view_an_individual_user()
    {
        $this->actingAs($user = User::factory()->create());

        $user->syncPermissions(['users.show']);

        $newUser = User::factory()->create();

        $this->get('/admin/auth/user/'.$newUser->id)->assertOk();

        $user->syncPermissions([]);

        $response = $this->get('/admin/auth/user/'.$newUser->id);

        $response->assertSee(__('No está autorizado para ejecutar esa acción'));
    }
}
