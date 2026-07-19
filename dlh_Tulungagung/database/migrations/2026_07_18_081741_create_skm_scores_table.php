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
        Schema::create('skm_scores', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('period')->nullable(); // Contoh: "Semester I" atau "Tahunan"
            $table->decimal('score', 5, 2); // Nilai SKM
            $table->string('category'); // Contoh: "Sangat Baik"
            $table->text('description')->nullable();
            $table->string('report_file')->nullable(); // PDF Laporan SKM
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skm_scores');
    }
};
