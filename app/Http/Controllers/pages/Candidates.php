<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Candidates extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            $query = DB::connection('Elementary')
                ->select('SELECT * FROM candidates',);
            if (sizeof($query) == 0) {
                return view('content.pages.candidates');
            }
            return view('content.pages.candidates')
                ->with('query', $query);
        } else {
            #kdkdk
        }

        return view('content.pages.candidates');
    }
}