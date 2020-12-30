<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerfiyIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!auth()->user()->isAdmin()) {
        return redirect('home');
      }
      return $next($request);
    }
}
