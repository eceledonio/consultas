<?php

namespace Tests\Feature\Frontend;

use App\Models\Auth\User;
use Tests\TestCase;

/**
 * Class PasswordExpirationTest.
 */
class PasswordExpirationTest extends TestCase
{
    /** @test */
    public function a_user_can_access_the_password_expired()
    {
        config(['boilerplate.access.user.password_expires_days' => 30]);

        $user = User::factory()->create();

        $this->actingAs($user);

        $this->get('/password/expired')->assertOk();
    }

    /** @test */
    public function a_user_with_an_expired_password_cannot_access_dashboard()
    {
        $user = User::factory()->passwordExpired()->create();

        $this->actingAs($user);

        $response = $this->get('/admin/dashboard')->assertRedirect('/password/expired');

        $response->assertSessionHas('flash_warning', __('Tu contraseña ha expirado. Le pedimos que cambie su contraseña cada :days días por motivos de seguridad.', [
            'days' => config('boilerplate.access.user.password_expires_days'),
        ]));
    }

    /** @test */
    public function a_user_with_an_expired_password_cannot_access_account()
    {
        $user = User::factory()->passwordExpired()->create();

        $this->actingAs($user);

        $response = $this->get('/admin/account')->assertRedirect('/password/expired');

        $response->assertSessionHas('flash_warning', __('Tu contraseña ha expirado. Le pedimos que cambie su contraseña cada :days días por motivos de seguridad.', [
            'days' => config('boilerplate.access.user.password_expires_days'),
        ]));
    }

    /** @test */
    public function password_expiration_update_requires_validation()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->patch('/password/expired');

        $response->assertSessionHasErrors(['current_password', 'password']);
    }

    /** @test */
    public function a_user_can_update_their_expired_password()
    {
        $user = User::factory()->passwordExpired()->create();

        $this->actingAs($user);

        $this->get('/admin/account')->assertRedirect('/password/expired');

        $response = $this->patch('/password/expired', [
            'current_password' => '1234',
            'password' => 'OC4Nzu270N!QBVi%U%qX',
            'password_confirmation' => 'OC4Nzu270N!QBVi%U%qX',
        ])->assertRedirect('/admin/account');

        $response->assertSessionHas('flash_success', __('Contraseña actualizada correctamente.'));

        $this->get('/admin/account')->assertOk();
    }
}
