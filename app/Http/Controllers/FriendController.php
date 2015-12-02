<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
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

    public function listFollowers()
    {
        $user = Auth::user();
        return view('followers', compact('user'));
    }

    public function listFollowing()
    {
        $user = Auth::user();
        return view('following', compact('user'));
    }

    public function block($id)
    {
        $follower = User::findOrFail($id);
        $user = Auth::user();

        $isBlocked = $follower->removeFollows($user) && $user->addBlock($follower);

        if($isBlocked){
            $msg = 'User '.$follower->first_name.' '.$follower->last_name.' will not be able to follow you anymore.';
        } else {
            $msg = 'Error blocking user '.$follower->first_name.' '.$follower->last_name.'. Please try again';
        }

        $result = [
            'is_blocked' =>$isBlocked,
            'message' => $msg
        ];

        return view('followers', compact('user', 'result'));

    }

    public function follow($id)
    {
        $userToFollow = User::findOrFail($id);
        $user = Auth::user();

        $followed = $userToFollow->hasBlocked($user);

        if($followed)
        {
            $msg = 'User has blocked you!';
        } else {
            $msg = 'Now you will be able follow '.$userToFollow->first_name.' '.$userToFollow.last_name.' activity.';
        }

        $result = [
            'is_followed' =>$followed,
            'message' => $msg
        ];

        return view('following', compact('user', 'result'));

    }

    public function unfollow($id)
    {
        $follows = User::findOrFail($id);
        $user = Auth::user();

        $isRemoved = $user->removeFollows($follows);


        if($isRemoved){
            $msg = 'You are not following '.$follows->first_name.' '.$follows->last_name.'  anymore.';
        } else {
            $msg = 'Error unfollowing user '.$follows->first_name.' '.$follows->last_name.'. Please try again';
        }

        $result = [
            'is_unfollowed' =>$isRemoved,
            'message' => $msg
        ];

        return view('following', compact('user', 'result'));

    }
}
