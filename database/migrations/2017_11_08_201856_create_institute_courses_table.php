<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courseId')->unsigned();
            $table->foreign('courseId')->references('id')->on('course_lists');
            $table->integer('instituteProgramId')->unsigned();            
            $table->foreign('instituteProgramId')->references('id')->on('institute_programs');
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
        Schema::dropIfExists('institute_courses');
    }
}
