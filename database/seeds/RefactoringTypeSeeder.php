<?php
/**
 * Created by PhpStorm.
 * User: leonardelezi
 * Date: 11/29/15
 * Time: 8:25 PM
 */

use Illuminate\Database\Seeder;

class RefactoringTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refactoring_types')->insert([
            'description' => 'Rename',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Move',
            'points' => 5,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Change method signature',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Extract method',
            'points' => 3,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Extract local variable',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Extract constant',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Inline',
            'points' => 2,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Convert local variable to field',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Convert anonymous class to nested',
            'points' => 2,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Move type to new file',
            'points' => 2,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Delete resource',
            'points' => 1,
        ]);


        DB::table('refactoring_types')->insert([
            'description' => 'Extract super class',
            'points' => 3,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Extract interface',
            'points' => 5,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'User supertype where possible',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Push down',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Push up',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Extract class',
            'points' => 3,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Introduce parameter object',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Introduce indirection',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Introduce faction',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Introduce parameter',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Encapsulate field',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Generalize declared type',
            'points' => 1,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Infer generic type argument',
            'points' => 1,
        ]);

        // Special
        DB::table('refactoring_types')->insert([
            'description' => 'Migrate jar file',
            'points' => 5,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Create script',
            'points' => 5,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'Apply script',
            'points' => 5,
        ]);

        DB::table('refactoring_types')->insert([
            'description' => 'History',
            'points' => 5,
        ]);

    }
}