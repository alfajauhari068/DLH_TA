<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title');
            $table->integer('status')->default(0)->after('cover_image');
            $table->integer('sort_order')->default(0)->after('status');
            $table->timestamp('published_at')->nullable()->after('sort_order');
            
            // SEO columns
            $table->string('meta_title')->nullable()->after('published_at');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->string('meta_keywords')->nullable()->after('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn([
                'slug', 'status', 'sort_order', 'published_at', 
                'meta_title', 'meta_description', 'meta_keywords'
            ]);
        });
    }
};
