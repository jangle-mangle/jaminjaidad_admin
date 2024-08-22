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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->string('role')->default('vendor');// varchar(vendor)
            $table->string('profile_pic');
            $table->string('loc_latitude');
            $table->string('loc_longitude');// bigint(20)
            $table->string('loc_address');
            $table->string('owner_name')->index('owner_name');
            $table->string('owner_mobile');
            $table->string('email_verified_at');
            $table->string('remember_token');
            $table->string('device_token');
            // $table->string('created_at');
            // $table->string('updated_at');
            $table->string('deleted_at');
            $table->string('is_active');// varchar(Yes, No)
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
        Schema::dropIfExists('vendor');

        $table->dropIndex(['name']);
        $table->dropIndex(['owner_name']);
    }
};
