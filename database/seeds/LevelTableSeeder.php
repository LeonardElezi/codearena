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
            'minrange' => 1,
            'maxrange' => 30,
            'range' => 30
        ]);

        DB::table('levels')->insert([
            'level' => 2,
            'minrange' => 31,
            'maxrange' => 60,
            'range' => 30
        ]);

        DB::table('levels')->insert([
            'level' => 3,
            'minrange' => 61,
            'maxrange' => 90,
            'range' => 30
        ]);

        DB::table('levels')->insert([
            'level' => 4,
            'minrange' => 91,
            'maxrange' => 150,
            'range' => 60
        ]);

        DB::table('levels')->insert([
            'level' => 5,
            'minrange' => 151,
            'maxrange' => 300,
            'range' => 150
        ]);

        DB::table('levels')->insert([
            'level' => 6,
            'minrange' => 301,
            'maxrange' => 600,
            'range' => 300
        ]);

        DB::table('levels')->insert([
            'level' => 7,
            'minrange' => 601,
            'maxrange' => 1200,
            'range' => 600
        ]);
    }
}