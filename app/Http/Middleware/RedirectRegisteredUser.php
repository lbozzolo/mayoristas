<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectRegisteredUser
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
        if(Auth::check() && Auth::user()->estado == 0){

            Auth::logout();
            return redirect()->route('auth.login')->withErrors('Usted se encuentra registrado en el sitema. Para poder ingresar primero debe ser habilitado por un administrador.');
        }

        return $next($request);
    }
}
