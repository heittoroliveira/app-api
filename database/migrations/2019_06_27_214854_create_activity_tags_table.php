<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('activity_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('activity_id')->unsigned();
            $table->timestamps();
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('activity_tags');
        Schema::enableForeignKeyConstraints();
    }
}