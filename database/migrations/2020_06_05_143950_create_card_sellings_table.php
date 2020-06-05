<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateCardSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_sellings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('card_id');
            $table->double('amount');
            $table->unsignedBigInteger('card_rate_id');
            $table->unsignedBigInteger('denomination_id');
            $table->string('payment_proof');
            $table->integer('status');
            $table->string('platform_payment_proof')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('token')->default(Str::random(15));
            $table->timestamps();
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('card_rate_id')->references('id')->on('card_rates');
            $table->foreign('denomination_id')->references('id')->on('denominations');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_sellings');
    }
}
