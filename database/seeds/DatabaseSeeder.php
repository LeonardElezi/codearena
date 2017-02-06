<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('RoleTableSeeder');
		$this->call('IdeTableSeeder');
		$this->call('ProgrammingLanguageTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('RefactoringTypeSeeder');
        $this->call('LevelTableSeeder');
        $this->call('CreateDayhoursTableSeeder');
        $this->call('SettingTableSeeder');
        //$this->call('ChaptersTableSeeder');
	}

}
