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
            $table->integer('userTypeId')->references('id')->on('user_types');
            $table->integer('branchId')->references('id')->on('consultancy_branches');
            $table->integer('accountCreatorId')->references('id')->on('users');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['userTypeId', 'branchId', 'accountCreatorId', 'isVisible']);
        });
    }
}
