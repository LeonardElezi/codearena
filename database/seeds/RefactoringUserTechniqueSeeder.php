<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 13.03.17
 * Time: 21:30
 */

use Illuminate\Database\Seeder;

class RefactoringUserTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_technique')->insert([
            'user_id' => 1,
            'technique_id'=>1,
            'technique_strength'=>5,
            'status'=>'unlocked',
            'href_classes'=>'skill-item',
            'span1_classes'=>'skill-icon small gold'
            //'span2_classes'=>'',
            //'span3_classes'=>''
        ]);
    }

}