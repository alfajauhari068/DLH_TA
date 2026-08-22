<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DownloadModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_download_index_is_accessible_to_authorized_user(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->get(route('admin.downloads.index'));

        $response->assertOk();
    }

    public function test_download_can_be_created_and_listed(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->post(route('admin.downloads.store'), [
            'title' => 'Download One',
            'slug' => 'download-one',
            'summary' => 'Short summary',
            'content' => 'Full content',
            'category' => 'documents',
            'status' => 'published',
            'featured' => true,
        ]);

        $response->assertRedirect(route('admin.downloads.index'));
        $this->assertDatabaseHas('downloads', ['slug' => 'download-one']);
    }
}
