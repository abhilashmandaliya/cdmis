<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instituteId')->references('id')->on('institutes');
            $table->integer('cityId')->references('id')->on('cities');
            $table->string('websiteLink');
            $table->string('contactNumber');
            $table->boolean('isVisible');
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
        Schema::dropIfExists('institute_cities');
    }
}
