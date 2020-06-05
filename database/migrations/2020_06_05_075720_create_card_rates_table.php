<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('card_id');
            $table->double('usd_rate');
            $table->double('gbp_rate');
            $table->double('eup_rate');
            $table->double('cad_rate');
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
        Schema::dropIfExists('card_rates');
    }
}
