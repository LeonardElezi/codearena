<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Level;
use App\Refactoring;
use App\RefactoringType;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Nathanmac\Utilities\Parser\Parser;
use Teepluss\Restable\Contracts\Restable;

class ApiRefactorHistoryController extends Controller {

    protected $user;
    protected $rest;

    public function __construct(Restable $rest)
    {
        $this->middleware('auth.basic');
        $this->rest = $rest;
    }

	public function parseHistory(Request $request)
    {
        Log::info("ParseHistory: received request ".$request);
        $this->user = Auth::user();

        $xmlContent = $request->getContent();

        $parser = new Parser();

        $parsed = $parser->xml($xmlContent);

        $history = $parsed['refactoring'];

        // save refactoring
        $refactoring = $this->saveRefactoring($history);

        // update points
        $rt = $refactoring->type()->first();

        $this->user->points += $rt->points;

        // update level
        $level = Level::where('range', '>', $this->user->points)
                        ->orderBy('level', 'asc')
                        ->first();

        $this->user->level = $level->level;


        $this->user->save();

        // TODO update badges

        // TODO progress bar


        // update rank here
        $users = User::where('id', '>', '0')->orderBy('points', 'desc')->get();

        foreach($users as $key=>$u)
        {
            $u->rank = $key+1;
            $u->save();
        }

        return $this->rest->single($this->user)->render('xml');
    }

    private function saveRefactoring($raw)
    {
        $ref = new Refactoring();
        $ref->description = $raw['description'];

        $ref->ref_id = $raw['@attributes']['id'];
        $ref->eclipse_timestamp = $raw['timestamp'];
        $ref->eclipse_date = $raw['date'];
        $ref->project = $raw['project'];

        $results = DB::select(DB::raw("SELECT id FROM refactoring_types WHERE :desc LIKE CONCAT('%', description, '%')"), array(
            'desc' => $ref['description'],
        ));

        $refTypeId = $results[0]->id;
        $refType = RefactoringType::find($refTypeId);

        $ref->type()->associate($refType);

        $this->user->refactorings()->save($ref);

        $ref->save();

        return $ref;
    }
}
