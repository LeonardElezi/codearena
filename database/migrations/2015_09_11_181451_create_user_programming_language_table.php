<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProgrammingLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_programming_language', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('pl_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pl_id')->references('id')->on('programming_languages')->onDelete('cascade');

            $table->primary(array('user_id', 'pl_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_programming_language', function (Blueprint $table) {
            Schema::drop('user_programming_language');
        });
    }
}
