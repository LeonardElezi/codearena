<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_follows', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('follows_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('follows_id')->references('id')->on('users')->onDelete('cascade');

            $table->primary(array('user_id', 'follows_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_follows', function (Blueprint $table) {
            Schema::drop('user_follows');
        });
    }
}
