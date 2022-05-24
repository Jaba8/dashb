<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('voucher_name')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('voucher_type')->nullable();
            $table->float('amount')->nullable();
            $table->Integer('usage')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('vouchers');
    }
}
