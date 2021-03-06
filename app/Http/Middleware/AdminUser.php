<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminUser
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
        /*if(Auth::user()->rol != '0' || Auth::user()->rol != '1'){
            return abort(403);
        }*/
        if(Auth::user()->rol == 2){
            return redirect()->route('home');
            //return abort(403);
        }

        return $next($request);
    }
}
