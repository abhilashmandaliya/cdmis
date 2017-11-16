<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteUpVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_up_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clientId')->references('id')->on('client_data');
            $table->integer('instituteId')->references('id')->on('institutes');
            $table->boolean('isVerified');
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
        Schema::dropIfExists('institute_up_votes');
    }
}
