<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: leonard
 * Date: 14.03.17
 * Time: 05:12
 */

use App\RefactoringProblem;
use App\User;
use App\RefactoringTechniques;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TechniquesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function techniques($id)
    {
        $user = Auth::user();
        $technique = RefactoringTechniques::find($id);
        //dd($technique->problem()->getResults());
        return view('lessons.duochapter',compact('user','technique'));
    }

}