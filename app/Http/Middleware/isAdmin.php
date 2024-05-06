<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        if(Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }
        return abort(403, 'Access denied. You must be an admin to view this page.');
    }
}


// class isAdmin
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         if(Auth::check() && Auth::user()->role_id == 1 && Auth::user()->role->name == 'admin') {
//         return $next($request);
//         }
//         return abort(403, 'Access denied. You must be an admin to view this page.');
        
//     }
// }
