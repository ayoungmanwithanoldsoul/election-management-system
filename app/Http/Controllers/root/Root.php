<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Root extends Controller
{
    public function index()
    {
        if (session('logged') && session('user') == 'admin') {
            return redirect()->route('admin-dashboard-home');
        }elseif(session('logged') && session('user') == 'voter'){
            return redirect()->route('voter-dashboard-home');
        }else{
            return redirect()->route('voter-auth-login');
        }
    }
}
