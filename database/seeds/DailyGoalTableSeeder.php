<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 07.02.17
 * Time: 21:34
 */

use Illuminate\Database\Seeder;

class DailyGoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_goals')->insert([
            'experience' => 1,
            'xptext' => "Basic"
        ]);

        DB::table('daily_goals')->insert([
            'experience' => 10,
            'xptext' => "Casual"
        ]);

        DB::table('daily_goals')->insert([
            'experience' => 20,
            'xptext' => "Regular"
        ]);

        DB::table('daily_goals')->insert([
            'experience' => 30,
            'xptext' => "Serious"
        ]);

        DB::table('daily_goals')->insert([
            'experience' => 50,
            'xptext' => "Insane"
        ]);
    }
}