<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Positions extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            $query = DB::connection('Elementary')
                ->select('SELECT name, specification, potency FROM positions');
            return view('content.pages.positions')
                ->with('query', $query);
        } elseif ($request->isMethod('POST')) {
            # code...
        } else {
            # code...
        }

    }
}
