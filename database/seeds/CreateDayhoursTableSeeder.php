<?php

use Illuminate\Database\Seeder;

class CreateDayhoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert([
            'hour' => '12am'
        ]);

        DB::table('hours')->insert([
            'hour' => '1am'
        ]);

        DB::table('hours')->insert([
            'hour' => '2am'
        ]);
        DB::table('hours')->insert([
            'hour' => '3am'
        ]);
        DB::table('hours')->insert([
            'hour' => '4am'
        ]);
        DB::table('hours')->insert([
            'hour' => '5am'
        ]);
        DB::table('hours')->insert([
            'hour' => '6am'
        ]);
        DB::table('hours')->insert([
            'hour' => '7am'
        ]);
        DB::table('hours')->insert([
            'hour' => '8am'
        ]);
        DB::table('hours')->insert([
            'hour' => '9am'
        ]);
        DB::table('hours')->insert([
            'hour' => '10am'
        ]);
        DB::table('hours')->insert([
            'hour' => '11am'
        ]);
        DB::table('hours')->insert([
            'hour' => '12pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '1pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '2pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '3pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '4pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '5pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '6pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '7pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '8pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '9pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '10pm'
        ]);
        DB::table('hours')->insert([
            'hour' => '11pm'
        ]);

    }
}
