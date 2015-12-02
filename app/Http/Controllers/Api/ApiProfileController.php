<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Teepluss\Restable\Restable;

class ApiProfileController extends Controller {

    protected $rest;

    public function __construct(Restable $rest)
    {
        $this->middleware('auth.basic');
        $this->rest = $rest;
    }

    //Returns the user trying to login, else returns invalid credentials
    public function followers()
    {
        $user = Auth::user();

        //return $user->follows->toArray();

        return $this->rest->listing($user->follows->toArray())->render('xml');
    }

}
