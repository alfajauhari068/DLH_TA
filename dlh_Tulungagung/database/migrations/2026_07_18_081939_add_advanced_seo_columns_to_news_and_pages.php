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
        foreach (['news', 'pages'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->string('canonical_url')->nullable()->after('seo_description');
                $table->string('og_title')->nullable()->after('canonical_url');
                $table->text('og_description')->nullable()->after('og_title');
                $table->string('twitter_card')->nullable()->default('summary_large_image')->after('og_description');
                $table->json('schema_json')->nullable()->after('twitter_card');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (['news', 'pages'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn(['canonical_url', 'og_title', 'og_description', 'twitter_card', 'schema_json']);
            });
        }
    }
};
