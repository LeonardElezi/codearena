<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Refactoring extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'refactorings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subject_id', 'description', 'ref_id','eclipse_timestamp', 'eclipse_date', 'project'];

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

    protected static function boot()
    {
        parent::boot();

        static::created(function($refactoring){
            Activity::create([
                'subject_id' => $refactoring->id,
                'subject_type' => get_class($refactoring),
                'name' => self::fixDescription($refactoring->description),
                'user_id' => $refactoring->user->id,
                'points' => $refactoring->type->points,
            ]);
        });
    }

    private static function fixDescription($desc)
    {
        $restOfSentence = strstr($desc, ' ');
        $firstWordOfSentence = strstr($desc, ' ', true);
        $charToAppend = "ed";
        if($firstWordOfSentence[strlen($firstWordOfSentence)-1]=='e')
        {
            $charToAppend="d";
        }
        $firstWordOfSentence = strtolower($firstWordOfSentence.$charToAppend);

        return $firstWordOfSentence.$restOfSentence;
    }
}
