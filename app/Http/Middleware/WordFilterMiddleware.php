<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WordFilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $list = [
            'black'
        ];

        if($request->has('name'))
        {
            if (in_array($request->name,$list))
            {
                return redirect()->back()->withErrors('use good words');
            }
        }

        return $next($request);
    }
}
