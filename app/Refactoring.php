<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Refactoring extends Model {

    use RecordsActivity;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function setEclipseTimestampAttribute($value)
    {
        $this->attributes['eclipse_timestamp'] = Carbon::createFromTimestamp($value/1000);
    }

    public function type()
    {
        return $this->belongsTo('App\RefactoringType', 'refactoring_types_id');
    }

}
