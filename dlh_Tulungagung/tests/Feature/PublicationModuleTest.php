<?php

namespace Tests\Feature;

use App\Models\Publication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicationModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_publication_index_is_accessible_to_authorized_user(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->get(route('admin.publications.index'));

        $response->assertOk();
    }

    public function test_publication_can_be_created_and_listed(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->post(route('admin.publications.store'), [
            'title' => 'Publication One',
            'slug' => 'publication-one',
            'summary' => 'Short summary',
            'content' => 'Full content',
            'status' => 'published',
            'featured' => true,
            'published_at' => now()->toDateTimeString(),
        ]);

        $response->assertRedirect(route('admin.publications.index'));
        $this->assertDatabaseHas('publications', ['slug' => 'publication-one']);
    }

    public function test_publication_can_be_soft_deleted_and_restored(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $publication = Publication::factory()->create(['title' => 'Soft Delete Publication']);
        $publication->delete();

        $this->assertSoftDeleted($publication);

        $response = $this->post(route('admin.publications.restore', $publication->id));
        $response->assertRedirect();
        $this->assertDatabaseHas('publications', ['id' => $publication->id, 'deleted_at' => null]);
    }

    public function test_publication_creation_requires_title(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->post(route('admin.publications.store'), [
            'slug' => 'missing-title',
        ]);

        $response->assertSessionHasErrors('title');
    }

    public function test_publication_module_is_registered(): void
    {
        $modules = config('cms_modules.modules', []);

        $this->assertTrue(collect($modules)->contains(fn ($module) => ($module['slug'] ?? null) === 'publications'));
    }
}
