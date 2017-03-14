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
        $user = Auth::user();
        $now = strtotime('now');
        $midnight = strtotime('midnight');
        $difference = $midnight - $now;
        $timeToMidnight = date("H", $difference);
        $techniques = $user->techniques()->get();
        //dd($techniques);
        // TODO: make logic to see if user signed in today and completed his goal, if true don't show time to midnight
        return view('duohome',compact('user', 'timeToMidnight', 'techniques'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function chapter()
    {

        $user = Auth::user();
        return view('lessons.duochapter', compact('user'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoles1()
    {

        $user = Auth::user();
        return view('lessons.duoles1', compact('user'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoles2()
    {

        $user = Auth::user();
        return view('lessons.duoles2', compact('user'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duoles3()
    {

        $user = Auth::user();
        return view('lessons.duoles3', compact('user'));
    }

}
