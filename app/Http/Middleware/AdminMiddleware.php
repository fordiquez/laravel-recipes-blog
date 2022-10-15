<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\Response|mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ((int) auth()->user()->role !== User::ROLE_ADMIN) {
            return response()->view('components.main.404');
        }
        return $next($request);
    }
}
