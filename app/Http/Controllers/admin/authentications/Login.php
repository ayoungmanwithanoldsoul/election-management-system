<?php

namespace App\Http\Controllers\admin\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('content.authentications.auth-login');
        } elseif ($request->isMethod('POST')) {
            $username = $request->input('username');
            $password = $request->input('password');
            $department = $request->input('department');
            $query = DB::connection($department)
                ->select('SELECT * FROM admins WHERE username = ?', [$username]);

            // Check if username exists
            if (sizeof($query) == 0) {
                return back()->withInput()
                    ->with('error_message', 'Username does not exist. Contact system administrator if yout think this was a mistake');
            }
            $query = $query[0];
            if (!password_verify($password, $query->hash)) {
                return back()->withInput()
                    ->with('error_message', 'Password is incorrect. Contact system administrator if you think this was a mistake');

            }

            // Save session
            session([
                'logged'     => true,
                'user'       => 'admin',
                'id'         => $query->id,
                'firstname'  => $query->firstname,
                'lastname'   => $query->lastname,
                'department' => $query->department,
                'username'   => $query->username
            ]);

            return redirect()->route('admin-dashboard')
                ->with('success_message', 'Successfully logged in as an administrator!');
        }
    }
}