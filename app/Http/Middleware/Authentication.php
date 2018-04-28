<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Authentication
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
        if (sessionHas('auth_admin')) {
            return $next($request);
        } else {
            return redirect('/auth/login');
        }
    }
}
