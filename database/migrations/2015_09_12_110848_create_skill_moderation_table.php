<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillModerationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_moderation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_id')->unsigned();
            $table->integer('moderation_id')->unsigned();
            $table->timestamps();

            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->foreign('moderation_id')->references('id')->on('moderations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skill_moderation');
    }
}
