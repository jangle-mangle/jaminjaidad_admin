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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_number');// varchar(20)
            $table->string('user_id');
            $table->string('vendor_id');
            $table->string('service_id');
            $table->string('service_type');// varchar(Accommodation, Foods, Transport)
            $table->string('accommodation_type_id');
            $table->string('persons_qty');
            $table->string('amount');// double(15, 2)
            $table->string('status');// varchar(Placed, Confirmed, Preparing, Ready To Pickup, Completed, Canceled)
            $table->string('checkin_at');
            $table->string('checkout_at');
            // created_at timestamp
            // updated_at timestamp [null]
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
        Schema::dropIfExists('bookings');
    }
};
