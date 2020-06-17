<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->double('amount_payable')->nullable();
            $table->double('rate')->nullable();
            $table->integer('user_transaction_approval')->default(1);
            $table->string('platform_payment_proof')->nullable();
            $table->unsignedBigInteger('card_id');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('other_country')->nullable();
            $table->unsignedBigInteger('denomination_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('status')->default(0);
            $table->integer('sell_option_id');
            $table->integer('receipt_type')->nullable();
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('denomination_id')->references('id')->on('denominations');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('token');
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
        Schema::dropIfExists('card_sellings');
    }
}
