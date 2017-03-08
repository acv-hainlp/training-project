<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class MustBeAdmin
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
        $user = Auth::user();

        if ($user && $user->role_id == 1)
        {
            return $next($request);
        }

        abort(404,'You are not admin');

    }
}
