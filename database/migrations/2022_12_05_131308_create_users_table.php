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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index('name'); // varchar
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->string('role');
            $table->string('profile_pic');
            $table->string('loc_latitude');
            $table->string('loc_longitude');
            $table->string('loc_address');
            $table->string('qualification');
            $table->string('guardian_name');
            $table->string('guardian_mobile');
            $table->string('guardian_relation');
            $table->string('email_verified_at');
            $table->string('remember_token');
            $table->string('device_token');
            $table->string('deleted_at');  // timestamp [null];
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
        Schema::dropIfExists('users');
        $table->dropIndex(['name']);
    }

};


