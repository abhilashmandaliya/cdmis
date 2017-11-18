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
            $table->integer('branchId')->unsigned();
            $table->integer('accountCreatorId')->unsigned();
            $table->boolean('isVisible');
            $table->foreign('userTypeId')->references('id')->on('user_types');
            $table->foreign('branchId')->references('id')->on('consultancy_branches');
            $table->foreign('accountCreatorId')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['userTypeId', 'branchId', 'accountCreatorId', 'isVisible']);
        });
    }
}
