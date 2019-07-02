<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('abbreviation');
            $table->string('name');
            $table->longText('history');
            $table->string('site');
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('institution_type_id')->unsigned();
            $table->bigInteger("institution_father_id", false, true)->nullable();
            
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('institution_type_id')->references('id')->on('institution_types');
            $table->foreign('institution_father_id')->references('id')->on('institutions');
            
            $table->timestamps();
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
        Schema::dropIfExists('institutions');
        Schema::enableForeignKeyConstraints();
    }
}