<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        //return $next($request);

        ////// we will only allow access to the route if the supplied age is greater than 200. Otherwise, we will redirect the users back to the home URI
        if ($request->age <= 200) {
            return redirect('products');
        }
        return $next($request);

    }
}
