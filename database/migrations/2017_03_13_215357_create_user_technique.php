<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTechnique extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_technique', function(Blueprint $table)
		{
            $table->integer('user_id')->unsigned();
            $table->integer('technique_id')->unsigned();
            $table->integer('technique_strength')->unsigned();
            // 0 ->locked, 1 -> unlocked
            $table->string('status')->default('locked');
            $table->string('href_classes');
            $table->string('span1_classes');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('technique_id')->references('id')->on('refactoring_techniques')->onDelete('cascade');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->primary(array('user_id', 'technique_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_technique');
	}

}
