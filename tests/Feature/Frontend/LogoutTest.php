<?php

namespace Tests\Feature\Frontend;

use App\Models\Auth\User;
use Tests\TestCase;

/**
 * Class LogoutTest.
 */
class LogoutTest extends TestCase
{
    /** @test */
    public function the_user_can_logout()
    {
        $this->actingAs($user = User::factory()->create());

        $this->assertAuthenticatedAs($user);

        $this->get('/logout')->assertRedirect('/login');

        $this->assertFalse($this->isAuthenticated());
    }
}
