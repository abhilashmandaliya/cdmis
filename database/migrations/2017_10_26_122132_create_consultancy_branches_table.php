<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultancyBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultancy_branches', function(Blueprint $table) {
            $table->increments('id');
            $table->string('contactNumber');
            $table->string('branchAddress');
            $table->integer('branchCity')->unsigned();
            $table->foreign('branchCity')->references('id')->on('cities');
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
        Schema::dropIfExists('consultancy_branches');
    }
}
