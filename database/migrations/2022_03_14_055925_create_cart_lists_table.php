<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity')->nullable();;

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->nullable()->references('id')->on('customers');

            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->nullable()->references('id')->on('stores');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->nullable()->references('id')->on('products');
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
        Schema::dropIfExists('cart_lists');
    }
}
