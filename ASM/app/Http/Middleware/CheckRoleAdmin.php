<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() !== true){
            return redirect()->route('auth.showLoginForm');
        }
        if (Auth::user()->role != 2) {
            return redirect()->route('client.index');
        }
        return $next($request);
    }
}
