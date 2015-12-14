<?php

namespace App\Http\Controllers;

use App\Activity;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use App\Ide;
use App\ProgrammingLanguage;
use App\Skill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class ProfileController extends Controller
{

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
        $activities = Activity::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $disable = false;
        return view('profile.profile', compact('user', 'activities', 'disable'));
    }

    public function showUserProfile($id)
    {
        $user = User::findOrFail($id);
        $activities = Activity::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $disable = true;
        return view('profile.profile', compact('user', 'activities', 'disable'));
    }

    /**
     * Show user profile for updating
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $ides = $this->ides();
        $skills = $this->skills();
        $programminglanguages = $this->programminglanguages();

        $allIdes = $this->dataToArray(Ide::all());
        $allLanguages = $this->dataToArray(ProgrammingLanguage::all());
        $allSkills = $this->dataToArray(Skill::where('moderated', true));

        JavaScriptFacade::put([
            'ides' => $ides,
            'allIdes' => $allIdes,
            'skills' => $skills,
            'allSkills' => $allSkills,
            'programminglanguages' => $programminglanguages,
            'allLanguages' => $allLanguages
        ]);

        if($request->has('result'))
        {
            $result = $request['result'];

        } else {
            $result = false;
        }

        return view('profile.update', compact('user', 'ides', 'skills', 'programminglanguages', 'result'));

    }

    public function edit(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->about = $request['about'];

        $result = $user->save();

        return redirect()->action('ProfileController@update', ['result'=>$result]);
    }

    public function editaccountinfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password'=>'required|min:6',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = Auth::user();
        $oldPassword = $request['old_password'];
        $currentPassword = $user->password;

        $validator->after(function($validator) use($oldPassword, $currentPassword) {
            if(!Hash::check($oldPassword, $currentPassword)){
                $validator->errors()->add('old_password', 'Password is incorrect!');
            }
        });
        if ($validator->fails()) {
            return redirect('/profile/update')
                ->withErrors($validator)
                ->withInput();
        }
        $user->password = bcrypt($request['password']);

        $result = $user->save();
        return redirect()->action('ProfileController@update', ['result'=>$result]);
    }

    public function ides()
    {
        $user = Auth::user();
        $ides = $user->ides()->get();

        return $this->dataToArray($ides);
    }

    public function skills()
    {
        $user = Auth::user();
        $skills = $user->skills()->get();

        return $this->dataToArray($skills);
    }

    public function programminglanguages()
    {
        $user = Auth::user();
        $programminglanguages = $user->programminglanguages()->get();

        return $this->dataToArray($programminglanguages);
    }

    private function dataToArray($data)
    {
        $result = [];
        foreach($data as $d)
        {
            array_push($result, $d->name);
        }

        return $result;
    }

    public function editUsersIdes(Request $request)
    {
        $name = $request->input('ide');

        $ide = Ide::where('name', $name)->first();

        if($ide)
        {
            $user = Auth::user();
            $user->ides()->save($ide);
            return ['created'=>'true'];
        }

        return ['created'=>'false'];


    }

    public function deleteUsersIdes(Request $request)
    {
        $name = $request->input('ide');

        $ide = Ide::where('name', $name)->first();

        if($ide)
        {
            $user = Auth::user();
            $user->ides()->detach($ide->id);
            return ['deleted'=>'true'];
        }

        return ['deleted'=>'false'];


    }

    public function editUsersProgrammingLanguages(Request $request)
    {
        $name = $request->input('programminglanguage');

        $pl = ProgrammingLanguage::where('name', $name)->first();

        if($pl)
        {
            $user = Auth::user();
            $user->programminglanguages()->save($pl);
            return ['created'=>'true'];
        }

        return ['created'=>'false'];


    }

    public function deleteUsersProgrammingLanguages(Request $request)
    {
        $name = $request->input('programminglanguage');

        $pl = ProgrammingLanguage::where('name', $name)->first();

        if($pl)
        {
            $user = Auth::user();
            $user->programminglanguages()->detach($pl->id);
            return ['deleted'=>'true'];
        }

        return ['deleted'=>'false'];
    }

    public function editUsersSkills(Request $request)
    {
        $name = strtolower($request->input('skill'));

        $skill = Skill::where('name', $name)->first();
        $user = Auth::user();

        if($skill)
        {
            $user->skills()->save($skill);
            return ['created'=>'true'];
        } else
        {
            $sk = new Skill();
            $sk->name = $name;
            $sk->save();
            $user->skills()->save($sk);
            return ['created'=>'true'];
        }

        return ['created'=>'false'];
    }

    public function deleteUsersSkills(Request $request)
    {
        $name = strtolower($request->input('skill'));

        $skill = Skill::where('name', $name)->first();

        if($skill)
        {
            $user = Auth::user();
            $user->skills()->detach($skill->id);
            return ['deleted'=>'true'];
        }

        return ['deleted'=>'false'];
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();
            $interventionAvatar = Image::make($avatar);
            $interventionAvatar->fit(200, 200);
            $interventionAvatar->save(storage_path().'/images/'.$avatar->getFilename().'.'.$extension);

            $user = Auth::user();
            $oldAvatar = $user->picture;
            $user->picture = $avatar->getFilename().'.'.$extension;
            $user->save();
            if($oldAvatar!='defaultavatar.jpg'){
                //delete old avatar related to user
                Storage::disk('local')->delete($oldAvatar);
            }
        }

        return redirect('profile');
    }
}
