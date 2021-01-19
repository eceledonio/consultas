<?php

namespace Tests\Feature\Frontend;

use App\Models\Auth\User;
use Tests\TestCase;

/**
 * Class DashboardTest.
 */
class DashboardTest extends TestCase
{
    /** @test */
    public function only_authenticated_users_can_access_their_account()
    {
        $this->get('/admin/dashboard')->assertRedirect('/login');

        $user = User::factory()->create();
        $user->givePermissionTo('dashboard.read');
        $this->actingAs($user);

        $this->get('/admin/dashboard')->assertOk();
    }
}
