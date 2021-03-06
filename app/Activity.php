<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'subject_id', 'subject_type','user_id', 'points'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
