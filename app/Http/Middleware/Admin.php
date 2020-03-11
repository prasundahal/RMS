<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->roles->pluck('id')[0] == 2) {
            return redirect()->route('waiter');
        }

        if (Auth::user()->roles->pluck('id')[0] == 1) {
            return $next($request);
        }


        abort(403);

    }
}
