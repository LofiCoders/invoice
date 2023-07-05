<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (! auth()->user()->is_admin) {
            return redirect()->route('account.dashboard');
        }

        return $next($request);
    }
}
