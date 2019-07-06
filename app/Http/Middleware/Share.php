<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;
class Share
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
        $categories = Category::orderBy('index', 'asc')->get();
        view()->share(compact('categories'));
        return $next($request);
    }
}
