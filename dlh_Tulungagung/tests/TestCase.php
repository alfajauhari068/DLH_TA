<?php

namespace Tests;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function loginAsAdmin(array $attributes = []): User
    {
        return $this->loginAsRole('Administrator', array_merge([
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ], $attributes));
    }

    protected function loginAsEditor(array $attributes = []): User
    {
        return $this->loginAsRole('Editor', array_merge([
            'email' => 'editor@example.com',
            'password' => bcrypt('password'),
        ], $attributes));
    }

    protected function loginAsGuest(array $attributes = []): User
    {
        return $this->loginAsRole('Guest', array_merge([
            'email' => 'guest@example.com',
            'password' => bcrypt('password'),
        ], $attributes));
    }

    protected function loginAsRole(string $roleName, array $attributes = []): User
    {
        $role = Role::firstOrCreate(
            ['name' => $roleName],
            ['description' => sprintf('%s role', $roleName)]
        );

        $user = User::factory()->create(array_merge([
            'role_id' => $role->id,
        ], $attributes));

        $user->setAttribute('role_name', $roleName);
        $user->setRelation('role', $role);

        return $user;
    }
}
