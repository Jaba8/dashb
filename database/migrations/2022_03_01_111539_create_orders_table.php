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
            $table->bigIncrements('id');
            $table->float('total_amount_less_voucher')->nullable();
            $table->float('total_amount')->nullable();
            $table->float('shipping_charges')->nullable();
            $table->float('admin_earning')->nullable();
            $table->float('vendor_earning')->nullable();
            $table->float('driver_earning')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('payment_type')->nullable();
            $table->integer('withdrawal_id')->nullable();

            // to be remove just for testing
            $table->string('driver_id')->nullable();;
            $table->string('store_id');
            $table->string('customer_id');

            // $table->unsignedBigInteger('order_data_id');
            // $table->foreign('order_data_id')->nullable()->references('id')->on('order_data');

            // $table->unsignedBigInteger('driver_id');
            // $table->foreign('driver_id')->nullable()->references('id')->on('drivers');

            // $table->unsignedBigInteger('store_id');
            // $table->foreign('store_id')->nullable()->references('id')->on('stores');

            // $table->unsignedBigInteger('customer_id');
            // $table->foreign('customer_id')->nullable()->references('id')->on('customers');

            // $table->unsignedBigInteger('voucher_id');
            // $table->foreign('voucher_id')->nullable()->references('id')->on('vouchers');

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
