<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('userTypeId')->unsigned();
            $table->foreign('userTypeId')->references('id')->on('user_types');
            $table->integer('branchId')->unsigned();
            $table->foreign('branchId')->references('id')->on('consultancy_branches');
            $table->integer('accountCreatorId')->unsigned();
            $table->foreign('accountCreatorId')->references('id')->on('users');            
            $table->boolean('isVisible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
