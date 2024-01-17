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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number')->unique();
            $table->integer('user_id')->nullable();
            $table->integer('billing_id')->nullable();
            $table->integer('shipping_id');
            $table->integer('company_id')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->double('shipping_price');
            $table->double('discount_value')->nullable();
            $table->string('comment')->nullable();
            $table->string('payment_method');
            $table->string('delivery_type');
            $table->tinyInteger('payed')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->dateTime('confirm_email_sent')->nullable();
            $table->tinyInteger('pixel_ga_purchase_sent')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
