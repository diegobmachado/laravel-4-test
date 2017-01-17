<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGroupPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_group', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned()->index();
            //$table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('group_id')->unsigned()->index();
            //$table->foreign('group_id')->references('id')->on('group')->onDelete('cascade');
            $table->primary(['user_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_group');
    }
}
