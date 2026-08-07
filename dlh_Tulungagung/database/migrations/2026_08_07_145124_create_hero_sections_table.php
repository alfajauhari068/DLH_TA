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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();

            // Informasi Hero
            $table->string('badge')->nullable();
            $table->string('title');
            $table->text('subtitle')->nullable();

            // Background
            $table->string('image');

            // Tombol CTA 1
            $table->string('button_1_text')->nullable();
            $table->string('button_1_url')->nullable();

            // Tombol CTA 2
            $table->string('button_2_text')->nullable();
            $table->string('button_2_url')->nullable();

            // Status
            $table->boolean('is_active')->default(false);

            // Urutan tampil
            $table->unsignedInteger('sort_order')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
