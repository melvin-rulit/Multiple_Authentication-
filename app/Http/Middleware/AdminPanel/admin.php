<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param string $guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guards='admin')
    {

     if (Auth::guard('admin')->check()){
         dd($request->user());
//            return redirect('/fuck');
       }
        return $next($request);
    }


}
