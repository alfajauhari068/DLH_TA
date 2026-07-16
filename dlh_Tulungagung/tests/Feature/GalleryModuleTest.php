<?php

namespace Tests\Feature;

use App\Http\Controllers\Admin\GalleryController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GalleryModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_gallery_module_routes_are_registered(): void
    {
        $routes = $this->app['router']->getRoutes();

        $this->assertNotNull($routes->getByName('admin.galleries.index'));
        $this->assertNotNull($routes->getByName('admin.galleries.create'));
        $this->assertNotNull($routes->getByName('admin.galleries.show'));
        $this->assertNotNull($routes->getByName('admin.galleries.edit'));
        $this->assertNotNull($routes->getByName('admin.galleries.trash'));
        $this->assertNotNull($routes->getByName('admin.galleries.restore'));
        $this->assertNotNull($routes->getByName('admin.galleries.forceDelete'));

        $indexRoute = $routes->getByName('admin.galleries.index');
        $this->assertStringContainsString(GalleryController::class, $indexRoute->getAction()['controller']);
    }
}
