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
        Schema::create('ppid_requests', function (Blueprint $table) {
            $table->id();
            $table->string('request_number');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('institution')->nullable();
            $table->text('request_information')->nullable();
            $table->text('purpose')->nullable();
            $table->string('status');
            $table->text('response')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->foreignId('processed_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppid_requests');
    }
};
