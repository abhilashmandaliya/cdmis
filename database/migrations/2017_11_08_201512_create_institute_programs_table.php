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
            $table->integer('instituteId')->unsigned();
            $table->foreign('instituteId')->references('id')->on('institutes');
            $table->integer('programId')->unsigned();            
            $table->foreign('programId')->references('id')->on('program_lists');
            $table->string('programLink');
            $table->integer('boardId')->unsigned();            
            $table->foreign('boardId')->references('id')->on('board_lists');
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
