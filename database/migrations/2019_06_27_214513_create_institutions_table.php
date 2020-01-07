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

            // Local
            $table->string('address_name');
            $table->string('address_neighborhood');
            $table->bigInteger('address_number');
            $table->string('address_complement')->nullable();
            $table->string('address_longitude')->nullable();
            $table->string('address_latitude')->nullable();
            $table->string('address_zip_code')->nullable();
            $table->string('address_city');
            $table->string('address_state');


            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('institution_type_id')->unsigned();
            $table->bigInteger("institution_father_id", false, true)->nullable();


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
