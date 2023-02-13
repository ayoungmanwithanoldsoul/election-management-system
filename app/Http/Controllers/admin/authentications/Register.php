<?php

namespace App\Http\Controllers\admin\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('content.authentications.auth-register');
        } elseif ($request->isMethod('POST')) {
            $firstname = $request->input('firstname');
            $lastname = $request->input('firstname');
            $authkey = $request->input('authkey');
            $username = $request->input('username');
            $password = $request->input('password');
            $confirmation = $request->input('confirmation');
            $department = $request->input('department');

            // Check the availability of username
            if ($this->checkUsername($username, $department)) {
                return back()->withInput()
                    ->with('error_message', 'Username already exists. Please choose a unique username');
            }

            // Check auth key
            if ($this->checkAuthKey($authkey)) {
                return back()->with('error_message', "Incorrect Authentication Key");
            }

            // Check if passwords match
            if ($confirmation != $password) {
                return back()->with('error_message', "Passwords don\'t match");
            }

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $query = DB::connection($department)
                ->insert('INSERT INTO admins (firstname, lastname, department, username, hash)
            VALUES (?, ?, ?, ?, ?)',
                    [$firstname, $lastname, $department, $username, $hash]
                );
            if (!$query) {
                return redirect()->back()->with('error_message', 'Error creating cdministrator account. Please Try Again Later');
            }
            $query = DB::connection($department)
                ->select('SELECT * FROM admins WHERE username = ? AND hash = ?', [$username, $hash])[0];

            // save session
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
                ->with('success_message', 'Successfully registered as an administrator!');
        }

    }

    private function checkUsername(string $username, string $department)
    {
        // Check the availability of username
        $query = DB::connection($department)
            ->select('SELECT * FROM admins WHERE username = ?', [$username]);
        return count($query) != 0 ? true : false;
    }

    private function checkAuthKey($authkey)
    {
        return $authkey != "DuWDc8V5EY4SLh6" ? true : false;
    }
}