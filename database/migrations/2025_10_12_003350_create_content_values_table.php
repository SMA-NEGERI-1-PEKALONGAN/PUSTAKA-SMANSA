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
        Schema::create('content_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained('content_entries')->onDelete('cascade');
            $table->foreignId('field_id')->constrained('template_fields')->onDelete('cascade');
            $table->longText('value')->nullable();
            $table->timestamps();
                    
                    
            $table->unique(['entry_id', 'field_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_values');
    }
};