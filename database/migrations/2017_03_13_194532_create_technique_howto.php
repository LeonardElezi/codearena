<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniqueHowto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('technique_howto', function(Blueprint $table)
		{
            $table->integer('ref_technique_id')->unsigned();
            $table->integer('ref_howto_id')->unsigned();
            $table->integer('sortingorder');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('ref_technique_id')->references('id')->on('refactoring_techniques')->onDelete('cascade');
            $table->foreign('ref_howto_id')->references('id')->on('refactoring_how_to')->onDelete('cascade');
            $table->primary(array('ref_technique_id', 'ref_howto_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('technique_howto');
	}

}
