<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\Admin\IndexController;

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
        Route::get('/users', [IndexController::class, 'index'])->name('admin.users.index');
        Route::post('/users', [IndexController::class, 'usersFilterByRole'])->name('admin.users.role');
        Route::post('/users/role', [IndexController::class, 'usersFilterByRole'])->name('admin.users.role');
        Route::get('/users/role', [IndexController::class, 'usersFilterByRole'])->name('admin.users.role');
        // Route::post('/users/course', [IndexController::class, 'usersFilterByCourse'])->name('admin.users.course');
        // Route::get('/users/course', [IndexController::class, 'usersFilterByCourse'])->name('admin.users.course');
        Route::post('/search', [IndexController::class, 'search'])->name('admin.users.search');
        Route::get('/search', [IndexController::class, 'search'])->name('admin.users.search');
        Route::get('/users/create', [IndexController::class, 'createuserview'])->name('admin.users.createview');
        Route::get('/users/{id}', [IndexController::class, 'edituser'])->name('admin.users.edit');
        Route::get('/users/{id}/delete', [IndexController::class, 'deleteuser'])->name('admin.users.delete');
        Route::get('users1/{id}' , [IndexController::class, 'enabledit'])->name('admin.users.enabledit');
        Route::put('users/{id}' , [IndexController::class, 'updateUser'])->name('admin.users.updateuser');
        Route::delete('usersd/{id}' , [IndexController::class, 'deleteuser'])->name('admin.users.deleteuser');
        Route::post('/users/create', [IndexController::class, 'createuser'])->name('admin.users.store');
        
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