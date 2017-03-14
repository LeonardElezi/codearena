<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 20:54
 */

use Illuminate\Database\Seeder;


class RefactoringSolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_solution')->insert([
            'name' => 'Solution',
            'description' => "Move this code to a separate new method (or function) and replace the old code with a call to the method."
        ]);

        DB::table('refactoring_solution')->insert([
            'name' => 'Solution',
            'description' => "Replace calls to the method with the method's content and delete the method itself."
        ]);

        DB::table('refactoring_solution')->insert([
            'name' => 'Solution',
            'description' => "Place the result of the expression or its parts in separate variables that are self-explanatory."
        ]);

        DB::table('refactoring_solution')->insert([
            'name' => 'Solution',
            'description' => "Replace the references to the variable with the expression itself."
        ]);

        DB::table('refactoring_solution')->insert([
            'name' => 'Problem',
            'description' => "Move the entire expression to a separate method and return the result from it. Query the method instead of using a variable. Incorporate the new method in other methods, if necessary."
        ]);
    }

}