<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name')->nullable();
            $table->text('description')->nullable();
            $table->float('amount')->nullable();
            $table->string('profile_image')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->nullable()->references('id')->on('categories');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->nullable()->references('id')->on('stores');
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
        Schema::dropIfExists('products');
    }
}
