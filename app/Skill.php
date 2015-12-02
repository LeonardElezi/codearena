<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The users that belong to the Skill.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_skill', 'skill_id', 'user_id');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = strtolower($name);
    }
}