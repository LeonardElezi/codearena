<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the top 10 leaders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('points', 'desc')
            ->get();

        return view('leaderboard', compact('users'));

    }

    public function topTenLeadeboard()
    {
        // get top 10 users with highest points
        $users = User::orderBy('points', 'desc')
            ->take(10)
            ->get();

        return view('leaderboard', compact('users'));
    }

    public function leaderboardByUser()
    {
        // SELECT * FROM MyTable WHERE ID <= 9 ORDER BY ID DESC LIMIT 3
        // UNION ALL
        // SELECT * FROM MyTable WHERE ID > 9  ORDER BY ID ASC  LIMIT 2

        $user = Auth::user();

        $usersAfter = DB::table('users')->where('points', '<=', $user->points)->orderBy('points', 'desc')->take(4);
        $union = DB::table('users')->where('points', '>', $user->points)->orderBy('points', 'asc')->take(3)->union($usersAfter)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
