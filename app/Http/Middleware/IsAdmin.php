<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class IsAdmin
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
        if (\Auth::check() && \Auth::user()->role_id == User::IS_ADMIN)
        {
            return $next($request);
        }
        return redirect()->route('user.home');
    }
}
