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
        Schema::create('billing_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('city_id');
            $table->string('post_code')->nullable();
            $table->string('address');
            $table->string('company_name')->nullable();
            $table->string('bank')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('unique_registration_code')->nullable();
            $table->string('registration_number')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_details');
    }
};
