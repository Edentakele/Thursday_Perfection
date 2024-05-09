<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            return redirect('/'); // Redirect unauthorized users to home page
        }

        return $next($request);
    }
}
