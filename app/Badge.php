<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_badge', 'badge_id', 'user_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function($badge){
            Activity::create([
                'subject_id' => $badge->id,
                'subject_type' => get_class($badge),
                'name' => 'joined CodeArena',
                'user_id' => $badge->id,
            ]);
        });
    }
}