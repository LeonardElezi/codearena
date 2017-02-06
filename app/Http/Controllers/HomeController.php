<?php namespace App\Http\Controllers;

use App\Activity;
use App\Level;
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

       // $activities = Activity::where('id', '>', '0')->orderBy('created_at', 'desc')->get();

        $activities = Activity::whereRaw('user_id IN (SELECT uf.follows_id FROM user_follows uf WHERE uf.user_id=:userID) || user_id=:userID2', array(
            'userID' => $user->id,
            'userID2' => $user->id,
        ))->orderBy('created_at', 'desc')->get();


        $level = Level::where('level', $user->level)->first();

        $levelProgress = round((($user->points-$level->minrange)/($level->maxrange-$level->minrange))*100);



        return view('home', compact('user', 'topTenLeaderboard', 'localLeaderboard', 'activities', 'levelProgress'));
	}

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duolingo()
    {

        return view('duohome');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function chapter()
    {

        return view('duochapter');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoles1()
    {

        return view('duoles1');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoles2()
    {

        return view('duoles2');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoles3()
    {

        return view('duoles3');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoprofile()
    {
        $user = Auth::user();
        $activities = Activity::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $disable = false;
        return view('duoprofile', compact('user', 'activities', 'disable'));
    }
}
