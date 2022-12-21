<?php

namespace App\Http\Controllers\voter\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('content.authentications.auth-login');
        } else {
            // Process Data
        }

    }
}

?>