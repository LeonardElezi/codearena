<?php namespace App\Http\Controllers;

use App\Activity;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	public function index()
	{
		$user = Auth::user();

		$topTenLeaderboard = User::orderBy('points', 'desc')
			->take(10)
			->get();

        $usersAfter = DB::table('users')->where('points', '<=', $user->points)->orderBy('points', 'desc')->take(3);
        $localLeaderboard = DB::table('users')->where('points', '>', $user->points)->orderBy('points', 'desc')->take(2)->union($usersAfter)->get();

        $activities = Activity::where('id', '>', '0')->orderBy('created_at', 'desc')->get();



        return view('home', compact('user', 'topTenLeaderboard', 'localLeaderboard', 'activities'));
	}

}
