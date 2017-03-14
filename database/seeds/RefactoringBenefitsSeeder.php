<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 21:13
 */

use Illuminate\Database\Seeder;


class RefactoringBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_benefits')->insert([
            'name' => 'Benefit',
            'description' => "More readable code! Be sure to give the new method a name that describes the method's purpose: createOrder(), renderCustomerInfo(), etc."
        ]);

        DB::table('refactoring_benefits')->insert([
            'name' => 'Problem',
            'description' => "Less code duplication. Often the code that is found in a method can be reused in other places in your program. So you can replace duplicates with calls to your new method."
        ]);

        DB::table('refactoring_benefits')->insert([
            'name' => 'Problem',
            'description' => "Isolates independent parts of code, meaning that errors are less likely (such as if the wrong variable is modified)."
        ]);
    }

}