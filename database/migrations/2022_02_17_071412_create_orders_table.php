<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->string('user_id');
            $table->string('name');
            $table->string('phone');
            $table->string('pincode');
            $table->string('locality');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('landmark')->nullable();
            $table->string('alternate_ph')->nullable();
            $table->string('email');
            $table->string('shipping_charges');
            $table->string('coupon_code');
            $table->string('coupon_ammount');
            $table->string('order_status');
            $table->string('payment_method');
            $table->string('payment_gateway');
            $table->string('grand_total');
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
}
