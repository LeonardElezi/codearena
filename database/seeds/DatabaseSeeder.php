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
        $this->call('DailyGoalTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('RefactoringTypeSeeder');
        $this->call('LevelTableSeeder');
        $this->call('CreateDayhoursTableSeeder');
        $this->call('SettingTableSeeder');
        $this->call('RefactoringCategoryTypeSeeder');
        $this->call('RefactoringSolutionSeeder');
        $this->call('RefactoringHowToSeeder');
        $this->call('RefactoringWhySeeder');
        $this->call('RefactoringTechniqueSeeder');
        $this->call('RefactoringUserTechniqueSeeder');
        $this->call('RefactoringProblemSeeder');
        //$this->call('ChaptersTableSeeder');
	}

}
