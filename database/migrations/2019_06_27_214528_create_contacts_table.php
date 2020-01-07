<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('whatsapp');
            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('institution_id')->unsigned();
            $table->timestamps();

            $table->foreign('institution_id')->references('id')->on('institutions');
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
        Schema::dropIfExists('contacts');
        Schema::enableForeignKeyConstraints();
    }
}
