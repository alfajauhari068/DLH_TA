<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_page_index_is_accessible_to_authorized_user(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->get(route('admin.pages.index'));

        $response->assertOk();
    }

    public function test_page_can_be_created_and_listed(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->post(route('admin.pages.store'), [
            'title' => 'About Page',
            'slug' => 'about-page',
            'content' => 'Full content',
            'status' => 'published',
            'seo_title' => 'About',
            'seo_description' => 'About description',
        ]);

        $response->assertRedirect(route('admin.pages.index'));
        $this->assertDatabaseHas('pages', ['slug' => 'about-page']);
    }
}
