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
        Schema::create('village_data', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('code_village');
            $table->string('phone_village');
            $table->string('commune_leader');
            $table->string('phone_commune');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('village_data');
    }
};
