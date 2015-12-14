<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show user profile
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::where('id', '<>', $user->id)->get();
        return view('users', compact('user', 'users'));
    }

    public function updateLevels()
    {
//        $user = Auth::user();
//        $user->last_level = $user->level;
//        $user->save();
    }

}
