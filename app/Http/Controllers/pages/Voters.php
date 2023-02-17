<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Voters extends Controller
{
    public function index(Request $request){
        if ($request->isMethod('GET')){
            $query = DB::connection('Elementary')
                ->select('SELECT firstname, lastname, level, section, voted FROM voters');
            return view('content.pages.voters')
                ->with('query', $query);
            // return view('content.pages.voters');
        } elseif ($request->isMethod('POST')) {
            return "POST RESPONSE";
        }
    }
}
