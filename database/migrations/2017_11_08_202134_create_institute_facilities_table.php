<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facilityId')->unsigned();
            $table->foreign('facilityId')->references('id')->on('facilities');
            $table->integer('instituteId')->unsigned();
            $table->foreign('instituteId')->references('id')->on('institutes');
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
        Schema::dropIfExists('institute_facilities');
    }
}
