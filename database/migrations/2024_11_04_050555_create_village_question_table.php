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
        Schema::create('village_question', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('short_code');
            $table->string('group_en');
            $table->string('group_kh');
            $table->string('sub_group_en');
            $table->string('sub_group_kh');
            $table->string('question_en');
            $table->string('question_kh');
            $table->string('unit_en');
            $table->string('unit_kh');
            $table->string('description')->nullable(true);
            $table->string('validate_rule')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('village_question');
    }
};
