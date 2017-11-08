<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instituteId')->references('id')->on('institutes');
            $table->integer('programId')->references('id')->on('programs');
            $table->string('programLink');
            $table->integer('boardId')->references('id')->on('boards');
            $table->integer('programFees');
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
        Schema::dropIfExists('institute_programs');
    }
}
