<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefactoringTechniques extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refactoring_techniques', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('iconlocked')->default('');
            $table->string('iconunlocked')->default('');
            $table->longText('description');
            $table->integer('refactoring_category_id')->unsigned();
            $table->integer('refactoring_solution_id')->unsigned();
            $table->integer('refactoring_why_id')->unsigned();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('refactoring_category_id')->references('id')->on('refactoring_category')->onDelete('cascade');
            $table->foreign('refactoring_solution_id')->references('id')->on('refactoring_solution')->onDelete('cascade');
            $table->foreign('refactoring_why_id')->references('id')->on('refactoring_why')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refactoring_techniques');
	}

}
