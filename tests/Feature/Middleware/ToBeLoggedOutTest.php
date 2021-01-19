<?php

namespace Tests\Feature\Middleware;

use App\Models\Auth\User;
use Tests\TestCase;

/**
 * Class ToBeLoggedOutTest.
 */
class ToBeLoggedOutTest extends TestCase
{
    /** @test */
    public function the_user_can_be_forced_logged_out()
    {
        $user = User::factory()->create(['to_be_logged_out' => false]);
        $user->givePermissionTo('dashboard.read');

        $this->actingAs($user);

        $this->get('/admin/dashboard')->assertOk();

        $user->update(['to_be_logged_out' => true]);

        $this->get('/admin/dashboard')->assertRedirect('/login');

        $this->assertFalse($this->isAuthenticated());
    }
}
