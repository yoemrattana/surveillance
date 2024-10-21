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
        Schema::create('commune_production', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commune_parent_id');
            $table->unsignedBigInteger('commune_question_id');
            $table->decimal('es_land_growed')->nullable();
            $table->decimal('land_production')->nullable();
            $table->decimal('avg_production_in_ha')->nullable();
            $table->decimal('es_production')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune_production');
    }
};
