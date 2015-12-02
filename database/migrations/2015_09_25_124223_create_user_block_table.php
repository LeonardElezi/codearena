<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBlockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_block', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('block_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('block_id')->references('id')->on('users')->onDelete('cascade');

            $table->primary(array('user_id', 'block_id'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_block', function (Blueprint $table) {
            Schema::drop('user_block');
        });
    }
}
