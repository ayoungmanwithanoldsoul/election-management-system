<?php

namespace App\Http\Middleware\Authenticate;

use Closure;
use Illuminate\Http\Request;

class AuthenticateSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('logged') === false || session('logged') === null) {
            // $request->attributes->add(['user' => session('user')]);
            return redirect()->route('voter-auth-login');
        }
        return $next($request);

    }
}