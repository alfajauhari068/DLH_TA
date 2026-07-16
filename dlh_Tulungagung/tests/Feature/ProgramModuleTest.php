<?php

namespace Tests\Feature;

use App\Models\Program;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProgramModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_program_index_is_accessible_to_authorized_user(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->get(route('admin.programs.index'));

        $response->assertOk();
    }

    public function test_program_can_be_created_and_listed(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $response = $this->post(route('admin.programs.store'), [
            'title' => 'Program One',
            'slug' => 'program-one',
            'excerpt' => 'Short summary',
            'content' => 'Full content',
            'status' => 1,
            'published_at' => now()->toDateTimeString(),
        ]);

        $response->assertRedirect(route('admin.programs.index'));
        $this->assertDatabaseHas('programs', ['slug' => 'program-one']);
    }

    public function test_program_can_be_soft_deleted_and_restored(): void
    {
        $this->actingAs($this->loginAsAdmin());

        $program = Program::factory()->create(['title' => 'Soft Delete Program']);
        $program->delete();

        $this->assertSoftDeleted($program);

        $response = $this->post(route('admin.programs.restore', $program->id));
        $response->assertRedirect();
        $this->assertDatabaseHas('programs', ['id' => $program->id, 'deleted_at' => null]);
    }
}
