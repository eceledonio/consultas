<?php

namespace Tests\Feature\Backend\User;

use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ClearSessionTest.
 */
class ClearSessionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_a_user_with_correct_permissions_can_clear_user_sessions()
    {
        $this->actingAs($user = User::factory()->create());

        $user->syncPermissions(['users.clear-session']);

        $newUser = User::factory()->create();

        $response = $this->post('/admin/auth/user/'.$newUser->id.'/clear-session');

        $response->assertSessionHas('flash_success', __("La sesión de $newUser->name se limpio correctamente."));

        $user->syncPermissions([]);

        $response = $this->post('/admin/auth/user/'.$newUser->id.'/clear-session');

        $response->assertSee(__('No está autorizado para ejecutar esa acción'));
    }

    /** @test */
    public function a_user_can_not_clear_their_own_session()
    {
        $this->actingAs($user = User::factory()->create());

        $user->syncPermissions(['users.clear-session']);

        $response = $this->post('/admin/auth/user/'.$user->id.'/clear-session');

        $response->assertSessionHas('flash_danger', __('No puedes limpiar tu propia sesión.'));
    }
}
