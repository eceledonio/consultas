<?php

namespace Tests\Feature\Frontend;

use App\Models\Auth\User;
use Tests\TestCase;

/**
 * Class UserAccountTest.
 */
class UserAccountTest extends TestCase
{
    /** @test */
    public function only_authenticated_users_can_access_their_account()
    {
        $this->get('/admin/account')->assertRedirect('/login');

        $this->actingAs(User::factory()->create());

        $this->get('/admin/account')->assertOk();
    }

    /** @test */
    public function profile_update_requires_validation()
    {
        $this->actingAs(User::factory()->create());

        config(['boilerplate.access.user.change_email' => true]);

        $response = $this->patch('/admin/profile/update');

        $response->assertSessionHasErrors(['first_name', 'email']);

        config(['boilerplate.access.user.change_email' => false]);

        $response = $this->patch('/profile/update');

        $response->assertSessionHasErrors('first_name');
    }

    /** @test */
    public function a_user_can_update_their_profile()
    {
        config(['boilerplate.access.user.change_email' => false]);

        $user = User::factory()->create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
        ]);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'first_name' => 'Jane',
            'last_name' => 'Doe',
        ]);

        $response = $this->actingAs($user)
            ->patch('/admin/profile/update', [
                'first_name' => 'John',
                'last_name' => 'Doe',
            ])->assertRedirect('/admin/account?#information');

        $response->assertSessionHas('flash_success', __('Perfil actualizado correctamente.'));

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
        ]);
    }

    /** @test */
    public function a_user_can_update_their_email_address()
    {
        config(['boilerplate.access.user.change_email' => true]);

        $user = User::factory()->create([
            'email' => 'jane@doe.com',
        ]);

        $user->givePermissionTo('dashboard.read');

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => 'jane@doe.com',
        ]);

        $response = $this->actingAs($user)
            ->patch('/admin/profile/update', [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@doe.com',
            ])->assertRedirect('/email/verify');

        $response->assertSessionHas('resent');
        $response->assertSessionHas('flash_info', __('Debe confirmar su nueva dirección de correo electrónico antes de poder continuar.'));

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@doe.com',
            'email_verified_at' => null,
        ]);

        // Double check
        $this->get('/admin/account')->assertRedirect('/email/verify');
    }
}
