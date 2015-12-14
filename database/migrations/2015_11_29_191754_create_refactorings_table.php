<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefactoringsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refactorings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description');
            $table->integer('ref_id');
            $table->integer('user_id')->unsigned();
            $table->integer('refactoring_types_id')->unsigned();
            $table->timestamp('eclipse_timestamp');
			$table->string('eclipse_date');
			$table->string('project');
			$table->timestamps();

            $table->foreign('refactoring_types_id')->references('id')->on('refactoring_types')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refactorings');
	}

}
