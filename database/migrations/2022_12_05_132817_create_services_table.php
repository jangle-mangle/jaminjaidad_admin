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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id');// bigint
            $table->enum('service_type', ['Accommodation', 'Foods','Transport'])->index('service_type');
            $table->string('accommodation_type_id');
            $table->string('name')->index('name');
            $table->string('mobile');
            $table->string('thumbnail');
            $table->string('address');
            $table->string('loc_latitude');
            $table->string('loc_longitude');
            $table->string('loc_address');
            $table->string('terms_and_condition');
            $table->string('gst_no');
            $table->string('fssai_certificate');
            $table->string('city_id');
            $table->string('max_person');
            $table->string('amount');  // decimal(15, 2)
            $table->enum('is_featured', ['Yes', 'No']);
            $table->string('total_reviews');
            $table->string('hotel_type');
            $table->string('description');
            $table->enum('status', ['Pending', 'Approved','Rejected']);
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
        Schema::dropIfExists('services');
        $table->dropIndex(['service_type']);
        $table->dropIndex(['name']);
    }
};
