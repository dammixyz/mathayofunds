<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('platform_id');
            $table->integer('coin_amount');
            $table->integer('coin_rate_id');
            $table->double('rate_amount');
            $table->string('payment_proof');
            $table->integer('status');
            $table->string('platform_payment_proof')->nullable();
            $table->integer('user_id');
            $table->string('token');
            $table->integer('coin_id');
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
        Schema::dropIfExists('coin_sellings');
    }
}
