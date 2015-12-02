<?php
/**
 * Created by PhpStorm.
 * User: leonardelezi
 * Date: 12/1/15
 * Time: 11:44 AM
 */

namespace App;

trait RecordsActivity
{
    protected static function boot()
    {
        parent::boot();

        static::created(function($model){
            Activity::create([
                'subject_id' => $model->id,
                'subject_type' => get_class($model),
                'name' => $model->getActivityName(),
                'user_id' => $model->user->id,
            ]);
        });
    }

    protected function getActivityName()
    {

    }
}