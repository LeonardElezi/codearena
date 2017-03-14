<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 21:41
 */

use Illuminate\Database\Seeder;


class RefactoringWhySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_why')->insert([
            'name' => 'Administrator',
            'description'=>'The more lines found in a method, the harder it is to figure out what the method does. This is the main reason for this refactoring. Besides eliminating rough edges in your code, extracting methods is also a step in many other refactoring approaches.'
        ]);

    }
}