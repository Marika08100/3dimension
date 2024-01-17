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
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('overpass_id');
            $table->string('type');
            $table->integer('county_id');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('postal_code');
            $table->string('name_hu');
            $table->string('name_ro');
            $table->string('name_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
