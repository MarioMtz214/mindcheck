<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectByRole {
    public function handle(Request $request, Closure $next): Response {
        if(Auth::check()) {
            // @ Administrador
            if(Auth::user()->is_admin) {
                return redirect('/admin/dashboard');
            }
    
            // @ Estudiante
            if(Auth::user()->is_student) {
                return redirect('/student/dashboard');
            }
    
            // @ Profesor
            if(Auth::user()->is_teacher) {
                return redirect('/teacher/dashboard');
            }
        }
    
        abort(401, 'Unauthorized action.');
    }
    
}
