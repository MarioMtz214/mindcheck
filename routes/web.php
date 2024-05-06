<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'redirectByRole'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // admin routes
    Route::middleware('admin')->prefix('admin')->group(function () {
        // Route::get('/dashboard/users', [UserController::class, 'index'])->name('users');
        Route::view('dashboard', 'auth/admin/dashboard')->name('admin.dashboard');
        
    });


    // student routes
    Route::middleware('student')->prefix('student')->group(function () {
        Route::view('dashboard', 'auth/student/dashboard')->name('student.dashboard');
        // Resto de las rutas de estudiante
    });
    

    // teacher routes
    Route::middleware('teacher')->prefix('teacher')->group(function () {
        Route::view('/dashboard', 'web.sections.teacher.index')->name('teacher.dashboard');
    });
});