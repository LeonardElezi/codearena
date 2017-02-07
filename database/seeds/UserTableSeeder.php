<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Leonard',
            'last_name' => 'Elezi',
            'email' => 'me@leonardelezi.com',
            'password' => bcrypt('123456'),
            'picture' => 'maleavatarxlarge.jpeg',
            'points' => 5,
            'dailygoal_id' => 1
        ]);

        DB::table('users')->insert([
            'first_name' => 'John',
            'last_name' => 'Smith',
            'email' => 'me@johnsmith.com',
            'password' => bcrypt('123456'),
            'picture' => 'defaultavatar.jpg',
            'points' => 8,
            'dailygoal_id' => 1
        ]);

        DB::table('users')->insert([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'me@janedoe.com',
            'password' => bcrypt('123456'),
            'picture' => 'defaultavatar.jpg',
            'points' => 10,
            'dailygoal_id' => 1
        ]);

        DB::table('users')->insert([
            'first_name' => 'Test',
            'last_name' => 'Again',
            'email' => 'me@test.com',
            'password' => bcrypt('123456'),
            'picture' => 'defaultavatar.jpg',
            'points' => 2,
            'dailygoal_id' => 1
        ]);
    }
}
