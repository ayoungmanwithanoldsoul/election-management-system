<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logout extends Controller
{
    public function index(Request $request)
    {
        $url = url()->previous();
        $route = app('router')
            ->getRoutes(url()->previous())
            ->match(app('request')
                ->create(url()->previous()))
            ->getName();

        if (str_contains($route, 'admin')) {
            $this->adminLogout();
        } else {
            $this->voterLogout();
        }

    }

    private function adminLogout()
    {
        return;
    }

    private function voterLogout()
    {
        session()->forget([
            'logged',
            'user',
            'id',
            'firstname',
            'lastname',
            'department',
            'level',
            'voted',
            'idnumber'
        ]);
        return redirect()->route('voter-auth-login');
    }
}