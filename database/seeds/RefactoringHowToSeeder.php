<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 21:16
 */

use Illuminate\Database\Seeder;

class RefactoringHowToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_how_to')->insert([
            'name' => 'How to',
            'description' => "Create a new method and name it in a way that makes its purpose self-evident."
        ]);

        DB::table('refactoring_how_to')->insert([
            'name' => 'How to',
            'description' => "Copy the relevant code fragment to your new method. Delete the fragment from its old location and put a call for the new method there instead."
        ]);

        DB::table('refactoring_how_to')->insert([
            'name' => 'How to',
            'description' => "Find all variables used in this code fragment. If they are declared inside the fragment and not used outside of it, simply leave them unchanged – they will become local variables for the new method."
        ]);

        DB::table('refactoring_how_to')->insert([
            'name' => 'How to',
            'description' => "If the variables are declared prior to the code that you are extracting, you will need to pass these variables to the parameters of your new method in order to use the values previously contained in them. Sometimes it is easier to get rid of these variables by resorting to Replace Temp with Query."
        ]);

        DB::table('refactoring_how_to')->insert([
            'name' => 'How to',
            'description' => "If you see that a local variable changes in your extracted code in some way, this may mean that this changed value will be needed later in your main method. Double-check! And if this is indeed the case, return the value of this variable to the main method to keep everything functioning."
        ]);
    }

}