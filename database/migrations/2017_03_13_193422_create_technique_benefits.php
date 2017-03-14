<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniqueBenefits extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('technique_benefit', function(Blueprint $table)
		{
            $table->integer('ref_technique_id')->unsigned();
            $table->integer('benefit_id')->unsigned();

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('ref_technique_id')->references('id')->on('refactoring_techniques')->onDelete('cascade');
            $table->foreign('benefit_id')->references('id')->on('refactoring_benefits')->onDelete('cascade');
            $table->primary(array('ref_technique_id', 'benefit_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('technique_benefit');
	}

}
