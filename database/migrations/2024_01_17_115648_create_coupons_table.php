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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->default(0);
            $table->string('code');
            $table->integer('value');
            $table->char('type');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->tinyInteger('used_once');
            $table->integer('used_no')->nullable();
            $table->tinyInteger('free_delivery')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(['user_id'])->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
