<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Teepluss\Restable\Contracts\Restable;

class ApiLoginController extends Controller {

    protected $rest;

	public function __construct(Restable $rest)
    {
        $this->middleware('auth.basic');
        $this->rest = $rest;
    }

    //Returns the user trying to login, else returns invalid credentials
    public function login()
    {
        $user = Auth::user();

        return $this->rest->single($user)->render('xml');
    }

}
