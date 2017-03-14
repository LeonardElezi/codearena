<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RefactoringTechniques extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_technique', 'technique_id', 'user_id');
    }

    public function problem()
    {
        return $this->hasOne('App\RefactoringProblem', 'refactoring_techniques_id');
    }

    public function solution()
    {
        return $this->hasOne('App\RefactoringSolution', 'refactoring_solution_id');
    }
}