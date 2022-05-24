<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');

            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->nullable()->references('id')->on('stores');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->nullable()->references('id')->on('products');


            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->nullable()->references('id')->on('orders');
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
        Schema::dropIfExists('order_data');
    }
}
