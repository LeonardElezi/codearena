<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->text('about')->nullable();
			$table->string('picture')->default('defaultavatar.jpg');
			$table->integer('points')->default(0);
			$table->integer('level')->default(1);
			$table->integer('rank')->default(0);
			$table->integer('login_count')->default(0);
            $table->integer('dailygoal_id')->unsigned();
			$table->timestamp('last_login')->nullable();
			$table->boolean('currently_logged_in')->default(false);
			$table->rememberToken();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('dailygoal_id')->references('id')->on('daily_goals')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
