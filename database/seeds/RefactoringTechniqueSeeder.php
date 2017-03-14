<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 21:30
 */

use Illuminate\Database\Seeder;

class RefactoringTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_techniques')->insert([
            'name' => 'Extract Method',
            'refactoring_category_id'=>1,
            'refactoring_solution_id'=>1,
            'refactoring_why_id'=>1,
            'description' => "Extract method.",
            'iconlocked' => ''
        ]);
    }

}