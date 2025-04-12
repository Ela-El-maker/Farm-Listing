<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {

        if($request->user()->role !== $role)
        {
            if($request->user()->role === 'rentee')
            {
                return redirect()->route('rentee.dashboard');
            }
            elseif($request->user()->role === 'renter')
            {
                return redirect()->route('renter.dashboard');
            }
        }
        return $next($request);
    }
}
