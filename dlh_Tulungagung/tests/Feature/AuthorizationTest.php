<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_users_are_redirected_to_login(): void
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_users_without_dashboard_permission_receive_forbidden(): void
    {
        $user = new User([
            'name' => 'Operator User',
            'email' => 'operator@example.com',
            'password' => 'secret',
        ]);
        $user->setAttribute('role_name', 'Operator');

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertForbidden();
    }

    public function test_administrators_can_access_dashboard(): void
    {
        $user = new User([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'secret',
        ]);
        $user->setAttribute('role_name', 'Administrator');

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertOk();
    }
}
