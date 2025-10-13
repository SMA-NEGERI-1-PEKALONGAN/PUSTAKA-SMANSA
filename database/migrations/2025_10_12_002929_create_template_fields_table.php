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
        Schema::create('template_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id')->constrained('templates')->onDelete('cascade');
            $table->string('field_name');
            $table->string('field_label')->nullable();
            $table->string('input_type'); // text, textarea, image, file, select, date, wysiwyg, etc.
            $table->boolean('is_required')->default(false);
            $table->integer('order')->default(0);
            $table->json('meta')->nullable(); // untuk options select, validation rules, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_fields');
    }
};