<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAuth
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
        if (Auth::guard('students')->check()) { 
            if (!Auth::guard('students')->user()->isStudent()) {
                return redirect()->route('studlogin')->with('error', 'You don\'t have access to this page');
            }
        }
        
        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                          ->header('Pragma', 'no-cache')
                          ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
