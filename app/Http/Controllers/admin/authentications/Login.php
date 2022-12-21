<?php

namespace App\Http\Controllers\admin\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
  public function index(Request $request)
  {
    
    return view('content.authentications.auth-login');
  }
}