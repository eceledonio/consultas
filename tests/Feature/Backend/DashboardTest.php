<?php

namespace Tests\Feature\Backend;

use App\Models\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class DashboardTest.
 */
class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function unauthenticated_users_cant_access_admin_dashboard()
    {
        $this->get('/admin/dashboard')
            ->assertRedirect('/login');
    }

    /** @test */
    public function not_authorized_users_cant_access_admin_dashboard()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/admin/dashboard');
        $response->assertSee('No está autorizado para ejecutar esa acción');
        $response->assertStatus(403);
    }

    /** @test */
    public function admin_can_access_admin_dashboard()
    {
        $this->loginAsAdmin();

        $this->get('/admin/dashboard');

        $this->get('/admin/dashboard')->assertOk();
    }
}
