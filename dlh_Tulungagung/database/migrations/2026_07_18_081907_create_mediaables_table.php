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
        Schema::create('mediaables', function (Blueprint $table) {
            $table->foreignId('media_id')->constrained('media')->cascadeOnDelete();
            $table->unsignedBigInteger('mediaable_id');
            $table->string('mediaable_type');
            $table->string('role')->default('featured'); // featured, gallery, attachment
            
            $table->primary(['media_id', 'mediaable_id', 'mediaable_type', 'role']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediaables');
    }
};
