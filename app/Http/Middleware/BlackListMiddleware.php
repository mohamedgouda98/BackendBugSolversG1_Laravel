<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BlackListMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $list = ['goudaa@gmail.com'];
        if(in_array(auth()->user()->email,$list))
        {
           Auth::logout();
            return to_route('login')->withErrors('user in black list');
        }

        return $next($request);
    }
}
