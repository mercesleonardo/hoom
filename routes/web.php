<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\SolicitationController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FileController;


// Middleware Authentication
Route::middleware(['auth'])->group(function() {
    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    //Projects routes
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/project', [ProjectController::class, 'show'])->name('project');

    //Blogs routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/blog', [BlogController::class, 'show'])->name('blog');

    //Approval routes
    Route::get('/approval', [ApprovalController::class, 'index'])->name('approval');

    //Solicitation routes
    Route::get('/solicitation', [SolicitationController::class, 'index'])->name('solicitation');

    //Attendance routes
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');

    //Files routes
    Route::get('/files', [FileController::class, 'index'])->name('files');

});

//Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

//Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login.action');

//Register routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/painel', function() {
    return view('admin.dashboard');
});

