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
            $table->id();
            $table->integer('card_id');
            $table->double('amount');
            $table->integer('rate_id');
            $table->integer('denomination_id');
            $table->string('payment_proof');
            $table->integer('status');
            $table->string('platform_payment_proof')->nullable();
            $table->integer('user_id');
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
