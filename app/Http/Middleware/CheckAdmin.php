<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        if (is_null(auth()->user()) || auth()->user()->role !== 'admin') {
            return abort(403);
        }

        return $next($request);
    }
}
