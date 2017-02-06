<?php
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 05.02.17
 * Time: 14:59
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

    public function hour()
    {
        return $this->belongsTo('App\Hour', 'notify_time');
    }
}