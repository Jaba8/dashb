<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_name')->nullable();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->string('profile_image')->nullable();
            $table->tinyInteger('approval')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('zipcode')->nullable();
            $table->float('wallet')->nullable();
            $table->unsignedBigInteger('store_users_id');
            $table->foreign('store_users_id')->nullable()->references('id')->on('store_users');
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
        Schema::dropIfExists('stores');
    }
}
