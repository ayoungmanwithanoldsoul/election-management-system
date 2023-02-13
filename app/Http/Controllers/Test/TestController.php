<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Requests;

class TestController extends Controller
{
    public function index (Request $request){
        return redirect()->route($request->get('user') . '-dashboard-home');
    }
}
