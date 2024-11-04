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
        Schema::create('village_response', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('village_question');
            $table->foreignId('parent_id')->constrained('village_data')->onDelete('cascade');
            $table->decimal('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('village_response');
    }
};
