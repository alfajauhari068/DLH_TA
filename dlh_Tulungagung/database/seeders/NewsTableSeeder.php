<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run(): void
    {
        $category = NewsCategory::where('slug', 'berita')->first();
        $author = User::where('email', 'admin@example.com')->first();

        if (! $category || ! $author) {
            return;
        }

        News::unguarded(function () use ($category, $author) {
            News::firstOrCreate(
                ['slug' => 'peluncuran-program-adiwiyata'],
                [
                    'category_id' => $category->id,
                    'author_id' => $author->id,
                    'title' => 'Peluncuran Program Adiwiyata',
                    'slug' => 'peluncuran-program-adiwiyata',
                    'summary' => 'Program edukasi lingkungan diluncurkan untuk sekolah-sekolah di Tulungagung.',
                    'content' => 'Konten berita contoh tentang peluncuran program lingkungan.',
                    'featured_image' => null,
                    'published_at' => now(),
                    'status' => 'published',
                    'views' => 120,
                    'is_featured' => true,
                    'seo_title' => 'Peluncuran Program Adiwiyata',
                    'seo_description' => 'Program Adiwiyata diluncurkan untuk mendukung sekolah ramah lingkungan.',
                    'seo_keywords' => 'adiwiyata, lingkungan, sekolah',
                ]
            );
        });
    }
}
