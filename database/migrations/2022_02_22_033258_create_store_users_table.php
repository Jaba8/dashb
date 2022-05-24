<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('profile_image')->nullable();
            $table->tinyInteger('approval')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->unsignedBigInteger('merchant_id');
            $table->foreign('merchant_id')->nullable()->references('id')->on('merchants');
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
        Schema::dropIfExists('store_users');
    }
}
