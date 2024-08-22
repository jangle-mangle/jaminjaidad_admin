<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');// varchar(20)
            $table->string('user_id');// bigint(20)
            $table->string('restaurant_id');// bigint(20)
            $table->enum('coupon_applied', ['Yes', 'No'])->default('Yes');
            $table->string('coupon_id');
            $table->string('coupon_price');
            $table->string('subtotal_price');
            $table->string('grand_total_price');
            $table->string('notes');
            $table->string('order_status');// varchar(Order_Placed, Order_Confirmed, Order_Preparing, Order_is_Ready_to_Pickup, Order_Complete, Order_Canceled) 
            $table->string('deleted_at');
            $table->enum('is_active', ['Yes', 'No'])->default('Yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
