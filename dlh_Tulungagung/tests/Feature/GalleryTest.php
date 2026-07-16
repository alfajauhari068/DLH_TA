<?php

namespace Tests\Feature;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GalleryTest extends TestCase
{
    use RefreshDatabase;

    public function test_gallery_can_be_created_with_slug_and_metadata(): void
    {
        $user = User::factory()->create();

        $gallery = Gallery::create([
            'title' => 'Test Gallery',
            'description' => 'Sample gallery description',
            'status' => 1,
            'sort_order' => 3,
            'created_by' => $user->id,
        ]);

        $this->assertNotNull($gallery->slug);
        $this->assertDatabaseHas('galleries', [
            'id' => $gallery->id,
            'title' => 'Test Gallery',
        ]);
    }
}
