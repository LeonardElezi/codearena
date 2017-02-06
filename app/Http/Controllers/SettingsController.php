<?php namespace App\Http\Controllers;

use App\Activity;
use App\Hour;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Spatie\Glide\GlideImage;

class SettingsController extends Controller
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
    public function duosettingsaccount()
    {
        $user = Auth::user();
        dd(GlideImage::load($user->picture, ['w'=>48, 'h'=>48]));
        $settings = $user->settings()->get()[0];
        $hours = Hour::all();
        return view('settings.account', compact('user', 'settings', 'hours'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duosettingsnotifications()
    {
        $user = Auth::user();
        $activities = Activity::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $disable = false;
        return view('settings.notifications', compact('user', 'activities', 'disable'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function duosettingscoach()
    {
        $user = Auth::user();
        $activities = Activity::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $disable = false;
        return view('settings.coach', compact('user', 'activities', 'disable'));
    }

    /**
     * Show save the settings.
     *
     * @return Response
     */
    public function save(Request $request)
    {
        $user = Auth::user();
        $user->email = $request['email'];
        $user->save();

        $userSetting = $user->settings()->get()[0];
        $userSetting->sound_effect_on = $request['sound_effect_on'];
        $userSetting->email_when_passed = $request['email_when_passed'];
        $userSetting->email_when_forget = $request['email_when_forget'];
        $userSetting->notify_time = $request['notify_time'];

        $userSetting->save();

        return response()->json(['status' => 'success', 'msg' => "Saved!"]);
    }

    public function uploadProfilePicture(Request $request){

        $user = Auth::user();
        $user->email = $request['email'];

        $userSetting = $user->settings()->get()[0];
        $userSetting->sound_effect_on = $request['sound_effect_on'];
        $userSetting->email_when_passed = $request['email_when_passed'];
        $userSetting->email_when_forget = $request['email_when_forget'];
        $userSetting->notify_time = $request['notify_time'];

        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();
            $interventionAvatar = Image::make($avatar);
            $interventionAvatar->fit(200, 200);
            $interventionAvatar->save(storage_path().'/images/'.$avatar->getFilename().'.'.$extension);

            $oldAvatar = $user->picture;
            $user->picture = $avatar->getFilename().'.'.$extension;

            try {
                if($oldAvatar!='defaultavatar.jpg'){
                    //delete old avatar related to user
                    Storage::disk('local')->delete($oldAvatar);
                }
            }
            catch(\Exception $e){
            }

        }

        $user->save();
        $userSetting->save();

        return response()->json(['status' => 'success', 'msg' => url('/img/'.(new GlideImage)->load($user->picture, ['w'=>48, 'h'=>48])->getUrl())]);
    }
}