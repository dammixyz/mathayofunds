<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateCoinSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_sellings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('platform_id');
            $table->integer('coin_amount');
            $table->unsignedBigInteger('coin_rate_id');
            $table->double('rate_amount');
            $table->string('payment_proof');
            $table->integer('status');
            $table->string('platform_payment_proof')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('token')->default(Str::random(15));
            $table->unsignedBigInteger('coin_id');
            $table->timestamps();
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->foreign('coin_rate_id')->references('id')->on('coin_rates');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('coin_id')->references('id')->on('coins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coin_sellings');
    }
}
