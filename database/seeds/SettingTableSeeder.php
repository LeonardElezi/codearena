<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'sound_effect_on' => 1,
            'email_when_passed' => 1,
            'email_when_forget' => 1,
            'notify_time' => 16,
            'user_id' => 1
        ]);

        DB::table('settings')->insert([
            'sound_effect_on' => 1,
            'email_when_passed' => 1,
            'email_when_forget' => 1,
            'notify_time' => 16,
            'user_id' => 2
        ]);

        DB::table('settings')->insert([
            'sound_effect_on' => 1,
            'email_when_passed' => 1,
            'email_when_forget' => 1,
            'notify_time' => 16,
            'user_id' => 3
        ]);

        DB::table('settings')->insert([
            'sound_effect_on' => 1,
            'email_when_passed' => 1,
            'email_when_forget' => 1,
            'notify_time' => 16,
            'user_id' => 4
        ]);
    }
}
