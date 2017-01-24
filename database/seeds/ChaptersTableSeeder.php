<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 17.01.17
 * Time: 14:44
 */

namespace database\seeds;


use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            'title' => 'Chapter 6',
            'description' => 'Chapter 6 description here'
        ]);

        DB::table('chapters')->insert([
            'title' => 'Chapter 7',
            'description' => 'Chapter 7 description here'
        ]);

        DB::table('chapters')->insert([
            'title' => 'Chapter 8',
            'description' => 'Chapter 8 description here'
        ]);

        DB::table('chapters')->insert([
            'title' => 'Chapter 9',
            'description' => 'Chapter 9 description here'
        ]);

        DB::table('chapters')->insert([
            'title' => 'Chapter 10',
            'description' => 'Chapter 10 description here'
        ]);
    }
}