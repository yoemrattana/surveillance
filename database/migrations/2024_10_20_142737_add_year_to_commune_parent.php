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
        Schema::table('commune_parent', function (Blueprint $table) {
            $table->integer('year')->nullable(false);
            $table->string('cm_code', 6)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commune_parent', function (Blueprint $table) {
            //
        });
    }
};
