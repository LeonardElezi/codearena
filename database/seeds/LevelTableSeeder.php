<?php
/**
 * Created by PhpStorm.
 * User: leonardelezi
 * Date: 11/29/15
 * Time: 11:36 PM
 */

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'level' => 1,
            'range' => 10
        ]);

        DB::table('levels')->insert([
            'level' => 2,
            'range' => 20
        ]);

        DB::table('levels')->insert([
            'level' => 3,
            'range' => 30
        ]);

        DB::table('levels')->insert([
            'level' => 4,
            'range' => 50
        ]);

        DB::table('levels')->insert([
            'level' => 5,
            'range' => 80
        ]);

        DB::table('levels')->insert([
            'level' => 6,
            'range' => 120
        ]);

        DB::table('levels')->insert([
            'level' => 7,
            'range' => 170
        ]);

        DB::table('levels')->insert([
            'level' => 8,
            'range' => 230
        ]);

        DB::table('levels')->insert([
            'level' => 9,
            'range' => 300
        ]);
    }
}