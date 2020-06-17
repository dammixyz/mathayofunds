<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcodeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecode_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('code');
            $table->unsignedBigInteger('card_selling_id');
            $table->string('token');
            $table->timestamps();
            $table->foreign('card_selling_id')->references('id')->on('card_sellings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecode_transactions');
    }
}
