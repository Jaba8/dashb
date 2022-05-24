<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
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
            $table->string('driver_license')->nullable();
            $table->string('nbi')->nullable();
            $table->string('dead_of_sale')->nullable();
            $table->string('health_cert')->nullable();
            $table->tinyInteger('approval')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('vehicle_type')->nullable();
            $table->string('zipcode')->nullable();
            $table->float('wallet')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
