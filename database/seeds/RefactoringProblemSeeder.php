<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 20:54
 */

use Illuminate\Database\Seeder;


class RefactoringProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_problem')->insert([
            'name' => 'Problem',
            'description' => "You have a code fragment that can be grouped together.",
            'refactoring_techniques_id'=>1
        ]);

//        DB::table('refactoring_problem')->insert([
//            'name' => 'Problem',
//            'description' => "When a method body is more obvious than the method itself, use this technique."
//        ]);
//
//        DB::table('refactoring_problem')->insert([
//            'name' => 'Problem',
//            'description' => "You have an expression that is hard to understand."
//        ]);
//
//        DB::table('refactoring_problem')->insert([
//            'name' => 'Problem',
//            'description' => "You have a temporary variable that is assigned the result of a simple expression and nothing more."
//        ]);
//
//        DB::table('refactoring_problem')->insert([
//            'name' => 'Problem',
//            'description' => "You place the result of an expression in a local variable for later use in your code."
//        ]);
    }

}