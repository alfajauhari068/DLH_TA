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
        Schema::table('departments', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('officials', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('complaints', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('ppid_requests', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ppid_requests', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('complaints', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('officials', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
