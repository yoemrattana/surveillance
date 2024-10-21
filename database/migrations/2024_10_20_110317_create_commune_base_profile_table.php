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
        Schema::create('commune_base_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commune_parent_id');
            $table->unsignedBigInteger('commune_question_id');
            $table->decimal('total')->nullable();
            $table->decimal('female')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune_base_profile');
    }
};
