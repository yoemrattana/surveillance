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
        Schema::create('commune_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commune_parent_id');
            $table->unsignedBigInteger('commune_question_id');
            $table->integer('total')->nullable();
            $table->integer('female')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune_education');
    }
};
