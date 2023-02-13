<?php

namespace App\Http\Controllers\voter\vote;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class Vote extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            return $this->retrieveBallot();
        } elseif ($request->isMethod('POST')) {
            return $this->addVote($request);
        } else {
            return "UNknown err";
        }
    }
    private function addVote($request)
    {
        $positionsClean = session('positionsClean');
        $voterId = session('id');
        foreach ($positionsClean as $subpositionsClean) {
            $candidateId = $request->input($subpositionsClean);
            $query = DB::connection(session('department'))
                ->insert('INSERT INTO votes (voter_id, candidate_id) VALUES (?, ?)', [$voterId, $candidateId]);
            if (!$query) {
                return back()->with(['vote_error' => "We can't process your request right now. Please try again later"]);
            }
        }
        // Update voted bool to true
        DB::connection(session('department'))
            ->update('UPDATE voters SET voted = 1 WHERE id = ?', [$voterId]);
        // Update session car voted to true
        session(['voted' => 0]);
        return view('content.vote.vote')
            ->with(['voted' => true]);
    }
    private function retrieveBallot()
    {
        // Check first if the voter already voted
        $query = DB::connection(session('department'))
            ->select("SELECT voted FROM voters WHERE id = ?", [session('id')]);
        if ($query[0]->voted) {
            // retrieve votes
            $query = DB::connection(session('department'))
                ->select('SELECT * FROM votes WHERE voter_id = ?', [session('id')]);
            // retrieve candidate names and position etc..
            $candidates = array();
            for ($i = 0; $i < sizeof($query); $i++) {
                array_push($candidates, DB::connection(session('department'))
                    ->select('SELECT * FROM candidates WHERE id = ?', [$query[$i]->candidate_id])[0]);
            }
            return view('content.vote.vote')
                ->with(['query' => $candidates])
                ->with(['voted' => true]);
        }
        // If no then select all the candidates from db
        $query = DB::connection(session('department'))
            ->select('SELECT * FROM candidates');
        return view('content.vote.vote')
            ->with(['query' => $query]);

    }
}