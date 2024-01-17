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
        Schema::create('delivery_prices', function (Blueprint $table) {
            $table->id();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('county_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->integer('price');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_prices');
    }
};
