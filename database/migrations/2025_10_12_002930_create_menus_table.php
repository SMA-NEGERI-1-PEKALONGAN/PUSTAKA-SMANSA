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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_menu_id')->constrained('main_menus')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('order')->default(0);
            $table->enum('content_type', ['multiple', 'single'])->default('single');
            $table->foreignId('template_id')->nullable()->constrained('templates')->onDelete('set null');
            $table->boolean('status')->default(true);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index(['main_menu_id', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};