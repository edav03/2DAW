<?php

namespace App\Http\Middleware;

use Closure;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        if (auth()->user()->rol === $rol)
            return $next($request);
        else
            return redirect('/');
    }
}
