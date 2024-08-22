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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->string('bank_refrence_id');
            $table->string('transaction_date_time');
            $table->string('user_id');
            $table->string('user_type');// varchar(User, vendor)
            $table->string('target_id');
            $table->string('target_type');// varchar(User, vendor)
            $table->string('order_id');
            $table->string('service_id');
            $table->string('trans_type');// varchar(Credit, Debit)
            $table->string('amount');// decimal(15, 2)
            $table->string('balance');// decimal(15, 2)
            $table->string('payment_status');// varchar(Pending, Success, Failed, Canceled)
            $table->string('remarks');
            $table->string('deleted_at'); // timestamp [null]
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
        Schema::dropIfExists('transactions');
    }
};
