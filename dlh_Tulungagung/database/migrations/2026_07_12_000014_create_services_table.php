<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->string('service_type')->nullable();
            $table->string('service_category')->nullable();
            $table->string('icon')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('banner')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('workflow')->nullable();
            $table->string('estimated_time')->nullable();
            $table->string('service_fee')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('office_location')->nullable();
            $table->string('office_hours')->nullable();
            $table->string('status')->default('draft');
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->softDeletes();
            $table->timestamps();

            $table->index('slug');
            $table->index('status');
            $table->index('service_category');
            $table->index('service_type');
            $table->index('published_at');
            $table->index('is_featured');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
