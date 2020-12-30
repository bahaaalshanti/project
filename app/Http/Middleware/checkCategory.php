<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;
use Illuminate\Http\Request;

class checkCategory
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      $count = Category::all()->count();
      if ($count == 0) {
        session()->flash('error', 'First you nedd to add some categories.');
        return redirect(route('categories.index'));
      }
        return $next($request);
    }
}
