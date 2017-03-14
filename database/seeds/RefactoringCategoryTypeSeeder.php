<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 20:07
 */

use Illuminate\Database\Seeder;


class RefactoringCategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_category')->insert([
            'name' => 'Refactoring',
            'description' => "A refactoring technique."
        ]);

        DB::table('refactoring_category')->insert([
            'name' => 'Bad Smell',
            'description' => "A code smell."
        ]);
    }

}