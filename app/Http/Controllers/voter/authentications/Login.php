<?php

namespace App\Http\Controllers\voter\authentications;

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
            $idnumber = $request->input('idnumber');
            $password = $request->input('password');
            $department = $request->input('department');
            $query = DB::connection($department)
                ->select('SELECT * FROM voters WHERE id_number = ?', [$idnumber]);
            if (sizeof($query) == 0) {
                return back()->withInput()
                    ->with('error_message', 'I.D. Number does not exist. Contact administrator if you think this was a mistake');
            }

            $query = $query[0];

            if (!password_verify($password, $query->hash)) {
                return back()->withInput()
                    ->with('error_message', 'Password is incorrect. Contact administrator if you think this was a mistake');
            }

            // Save session
            session([
                'logged'     => true,
                'user'       => 'voter',
                'id'         => $query->id,
                'firstname'  => $query->firstname,
                'lastname'   => $query->lastname,
                'department' => $query->department,
                'level'      => $query->level,
                'voted'      => $query->voted,
                'idnumber'   => $query->id_number
            ]);
            return redirect()->route('voter-dashboard-home')
                ->with('success_message', 'Successfully logged in as a voter!');
        }

    }
}

?>
