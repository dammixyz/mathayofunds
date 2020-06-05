<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateCoinBuyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_buyings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amount');
            $table->double('buying_rate');
            $table->unsignedBigInteger('coin_rate_id');
            $table->unsignedBigInteger('coin_id');
            $table->string('coin_wallet');
            $table->integer('status');
            $table->string('reason')->nullable();
            $table->string('link')->nullable();
            $table->string('payment_proof');
            $table->string('platform_payment_proof')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('token')->default(Str::random(15));
            $table->timestamps();
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
        Schema::dropIfExists('coin_buyings');
    }
}
