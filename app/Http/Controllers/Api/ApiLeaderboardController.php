<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Teepluss\Restable\Restable;

class ApiLeaderboardController extends Controller {

    protected $rest;

    public function __construct(Restable $rest)
    {
        $this->middleware('auth.basic');
        $this->rest = $rest;
    }

    //Returns the global leaderboard, else returns invalid credentials
    public function UniversalLeaderboard()
    {
        $user = Auth::user();

        // get top 10 users with highest points
        $users = User::orderBy('points', 'desc')
            ->take(10)
            ->get();

        return $this->rest->listing($users->toArray())->render('xml');
    }

    //Returns the leaderboard around the user, else returns invalid credentials
    public function UserLeaderboard()
    {

        // SELECT * FROM MyTable WHERE ID <= 9 ORDER BY ID DESC LIMIT 3
        // UNION ALL
        // SELECT * FROM MyTable WHERE ID > 9  ORDER BY ID ASC  LIMIT 2

        $user = Auth::user();

        $usersAfter = DB::table('users')->where('points', '<=', $user->points)->orderBy('points', 'desc')->take(4);
        $union = DB::table('users')->where('points', '>', $user->points)->orderBy('points', 'asc')->take(3)->union($usersAfter)->get();

        return $this->rest->listing($union)->render('xml');
    }

}
