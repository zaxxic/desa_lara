<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class chekrole
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role ==='admin_desa'){
            return $next($request);
        }else{
            return redirect('dashboard');
        }
    }

   
}
