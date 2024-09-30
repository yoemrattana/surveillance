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
        Schema::create('village_value', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('attribute_id');
            $table->integer('value')->nullable();
            $table->timestamps();

//            $table->foreign('parent_id')->references('id')->on('village_data')
//                ->onUpdate('cascade')->onDelete('cascade');

//            $table->foreign('attribute_id')->references('id')->on('attributes')
//                ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('village_value');
    }
};
