<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_users_are_redirected_to_login(): void
    {
        $response = $this->get(route('dashboard'));

        $response->assertRedirect(route('login'));
    }

    public function test_users_without_dashboard_permission_receive_forbidden(): void
    {
        $user = $this->loginAsGuest();

        $response = $this->actingAs($user)->get(route('dashboard'));

        $response->assertForbidden();
    }

    public function test_administrators_can_access_dashboard(): void
    {
        $user = $this->loginAsAdmin();

        $response = $this->actingAs($user)->get(route('dashboard'));

        $response->assertOk();
    }
}
