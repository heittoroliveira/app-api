<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('event_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price');
            $table->string('type');
            $table->bigInteger('event_id')->unsigned();
            $table->timestamps();
           
            $table->foreign('event_id')->references('id')->on('events');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('event_prices');
        Schema::enableForeignKeyConstraints();
    }
}