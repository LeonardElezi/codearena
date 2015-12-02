<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    /**
     * The roles that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_programming_language', 'pl_id', 'user_id');
    }

    public static function programmingLanguagesFromNames($names)
    {
        $result = [];
        foreach($names as $name)
        {
            $pl = ProgrammingLanguage::where('name', $name)->first();
            if(!is_null($pl)){
                array_push($result, $pl);
            }
        }

        return $result;
    }
}
