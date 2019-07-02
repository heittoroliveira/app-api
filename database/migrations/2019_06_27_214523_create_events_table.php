<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('abbreviation');
            $table->string('number');
            $table->longText('history');
            $table->string('folder');
            $table->date('date');
            $table->string('starting_time');
            $table->string('end_time');
            $table->string('state');
            $table->string('site');
            $table->timestamps();
           
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('institution_id')->unsigned();
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('event_category_id')->unsigned();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('event_category_id')->references('id')->on('event_categories');
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
        Schema::dropIfExists('events');
        Schema::enableForeignKeyConstraints();
    }
}