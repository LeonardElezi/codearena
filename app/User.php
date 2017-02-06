<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\DB;
use Spatie\Glide\GlideImage;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name','email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function settings()
    {
        return $this->hasOne('App\Setting', 'user_id');
    }

    /**
     * The IDEs that belong to the user.
     */
    public function ides()
    {
        return $this->belongsToMany('App\Ide', 'user_ide', 'user_id', 'ide_id');
    }

    /**
     * The skills that belong to the user.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'user_skill', 'user_id', 'skill_id');
    }

    public function follows()
    {
        return $this->belongsToMany('App\User', 'user_follows', 'user_id', 'follows_id');
    }

    public function followed()
    {
        return $this->belongsToMany('App\User', 'user_follows', 'follows_id', 'user_id');
    }

    public function removeFollows(User $user)
    {
        $result = $this->follows()->detach($user->id);

        return $result == 1;
    }

    public function addFollows(User $user)
    {
        return $this->follows()->save($user);
    }

    public function blocks()
    {
        return $this->belongsToMany('App\User', 'user_block', 'user_id', 'block_id');
    }

    public function blocked()
    {
        return $this->belongsToMany('App\User', 'user_block', 'block_id', 'user_id');
    }

    public function hasBlocked(User $u)
    {
        return count($this->blocks()->where('block_id', $u->id)->get()) > 0;
    }

    public function hasFollowed(User $u)
    {
        return count($this->follows()->where('follows_id', $u->id)->get()) > 0;
    }

    public function addBlock(User $user)
    {
        $result = $this->blocks()->save($user);
        return $result == $user;
    }

    public function removeBlock(User $user)
    {
        return $this->blocks()->detach($user->id);
    }

    public function badges()
    {
        return $this->belongsToMany('App\Badge', 'user_badge', 'user_id', 'badge_id');
    }

    /**
     * The programminglanguages that belong to the user.
     */
    public function programminglanguages()
    {
        return $this->belongsToMany('App\ProgrammingLanguage', 'user_programming_language', 'user_id', 'pl_id');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\User', 'user_role', 'user_id', 'role_id');
    }

    public function refactorings()
    {
        return $this->hasMany('App\Refactoring');
    }

    public function activities()
    {
        return $this->hasMany('App\Activity');
    }


    public function saveIdesFromNames($names)
    {
        $ides = Ide::idesFromNames($names);
        $result = [];

        foreach($ides as $ide)
        {
            if(!$this->userIdeRelationExists($this->id, $ide->id))
            {
                $res = $this->ides()->save($ide);
                if(!is_null($res)){
                    array_push($result, $res);
                }
            }
        }

        return $result;
    }

    public function saveProgrammingLanguagesFromNames($names)
    {
        $pls = ProgrammingLanguage::programmingLanguagesFromNames($names);
        $result = [];

        foreach($pls as $pl)
        {
            $res = $this->programminglanguages()->save($pl);

            if(!is_null($res)){
                array_push($result, $res);
            }
        }

        return $result;

    }

    public function userIdeRelationExists($userId, $ideId)
    {
        return DB::table('user_ide')
            ->whereUserId($userId)
            ->whereIdeId($ideId)
            ->count() > 0;
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function($user){
            Activity::create([
                'subject_id' => $user->id,
                'subject_type' => get_class($user),
                'name' => ' joined CodeArena',
                'user_id' => $user->id,
                'points' => 3
            ]);

            $users = User::all();
            foreach($users as $u)
            {
                if($user->id != $u->id){
                    $user->addFollows($u);
                    $u->addFollows($user);
                }
            }
        });
    }

    public function getThumbAttribute()
    {
        return GlideImage::load($this->picture, ['w' => 48, 'h' => 48])->getURL();
    }

}