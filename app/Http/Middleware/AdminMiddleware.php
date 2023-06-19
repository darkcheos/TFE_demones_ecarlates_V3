<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //middleware de verification si l'utilisateur, un l'admin ou un des modérateur, pour les pages réserver a eux
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            if(Auth::user()->use_role_id >= '6')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status','admin');
            }
        }
        else
        {
            return redirect('/login');
        }
    }
}
