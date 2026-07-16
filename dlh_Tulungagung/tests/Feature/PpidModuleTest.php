<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PpidModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_ppid_index_is_accessible_to_authorized_user(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->get(route('admin.ppid.index'));

        $response->assertOk();
    }

    public function test_ppid_can_be_created_and_listed(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->post(route('admin.ppid.store'), [
            'title' => 'PPID Document',
            'slug' => 'ppid-document',
            'summary' => 'Short summary',
            'content' => 'Full content',
            'category' => 'public',
            'status' => 'published',
        ]);

        $response->assertRedirect(route('admin.ppid.index'));
        $this->assertDatabaseHas('ppid_requests', ['slug' => 'ppid-document']);
    }
}
