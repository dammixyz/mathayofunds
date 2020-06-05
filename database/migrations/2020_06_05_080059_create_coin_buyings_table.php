<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('amount');
            $table->double('buying_rate');
            $table->integer('coin_rate_id');
            $table->integer('coin_id');
            $table->string('coin_wallet');
            $table->integer('status');
            $table->string('reason')->nullable();
            $table->string('link')->nullable();
            $table->string('payment_proof');
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
        Schema::dropIfExists('coin_buyings');
    }
}
