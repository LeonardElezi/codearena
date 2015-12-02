<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ide extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_ide', 'ide_id', 'user_id');
    }

    public static function idesFromNames($names)
    {
        $result = [];
        foreach($names as $name)
        {
            $ide = Ide::where('name', trim($name))->first();
            if(!is_null($ide)){
                array_push($result, $ide);
            }
        }
        return $result;
    }


}
