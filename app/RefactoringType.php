<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RefactoringType extends Model {
    public function refs()
    {
        return $this->hasMany('App\Refactoring', 'refactoring_types_id');
    }
}
