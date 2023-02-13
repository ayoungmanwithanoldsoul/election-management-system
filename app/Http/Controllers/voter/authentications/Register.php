<?php

namespace App\Http\Controllers\voter\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Register extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            // session(['visited' => "yesjsjjfjefjejfjejfjejfjefjejfjejfjefjejfklceljf"]);
            return view('content.authentications.auth-register');
        } elseif ($request->isMethod('POST')) {
            // $input = $request->all();
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $idnumber = $request->input('idnumber');
            $department = $request->input('department');
            $level = $request->input('level');
            $section = $request->input('section');
            $password = $request->input('password');
            $confirmation = $request->input('confirmation');

            // Check I.D. Number if it already exist in database
            if ($this->checkId($idnumber, $department)) {
                return back()->withInput()
                    ->with('error_message', 'I.D. Number already exists. Contact administrator if you think this was a mistake');
            }

            if ($password != $confirmation) {
                return back()->withInput()
                    ->with('error_message', 'Passwords don\'t match');
            }

            // Create password hash
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $query = DB::connection($department)
                ->insert('INSERT INTO voters (firstname, lastname, department, level, section, id_number, hash) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)',
                    [$firstname, $lastname, $department, $level, $section, $idnumber, $hash]
                );


            if (!$query) {
                return redirect()->back()->with('error_message', 'We cant create your account right now. Please try again later');
            } else {
                $query =DB::connection($department)
                    ->select('SELECT id, voted, id_number FROM voters WHERE id_number = ? AND hash = ?', [$idnumber, $hash])[0];
            }
            session([
                'logged'     => true,
                'user'       => 'voter',
                'id'         => $query->id,
                'firstname'  => $firstname,
                'lastname'   => $lastname,
                'department' => $department,
                'level'      => $level,
                'voted'      => $query->voted,
                'idnumber'   => $query->id_number
            ]);

            return redirect()->route('voter-dashboard-home')
                ->with('success_message', 'Successfully registered as a voter!');
        }
    }

    private function checkId(int $idnumber, string $department)
    {
        // Check the I.D. of voter if it already exist
        $query = DB::connection($department)
            ->select('SELECT * FROM voters WHERE id_number = ?', [$idnumber]);
        return count($query) != 0 ? true : false;
    }
}