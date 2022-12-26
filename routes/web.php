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
use App\Http\Controllers\PainelController;
use App\Http\Controllers\LoginadminController;


// Middleware Authentication client
Route::middleware(['client'])->group(function() {
    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    //Projects routes
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/project', [ProjectController::class, 'show'])->name('project');

    //Blogs routes


    //Approval routes
    Route::get('/approval', [ApprovalController::class, 'index'])->name('approval');

    //Solicitation routes
    Route::get('/solicitation', [SolicitationController::class, 'index'])->name('solicitation');

    //Attendance routes
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');

    //Files routes
    Route::get('/files', [FileController::class, 'index'])->name('files');

});

//Home client routes
Route::get('/', [HomeController::class, 'index'])->name('home');

//Login client routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login.action');

//Register client routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');



// Middleware Authentication admin
Route::middleware(['admin'])->group(function() {

    Route::get('/painel', [PainelController::class, 'index'])->name('painel');
    Route::get('/logoutadmin', [PainelController::class, 'logout'])->name('logoutadmin');

    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('create');
    Route::post('blogs/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blogs/edit/{blog}', [BlogController::class, 'edit'])->name('edit');
    Route::put('/blogs/update/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blogs/delete/{blog}', [BlogController::class, 'destroy'])->name('destroy');

    Route::get('/painel/client', [RegisterController::class, 'painelClient'])->name('admin.user.index');
    Route::get('/painel/client/create', [RegisterController::class, 'create'])->name('admin.user.create');
    Route::post('painel/client/store', [RegisterController::class, 'userstore'])->name('admin.user.store');
    Route::get('painel/client/edit/{user}', [RegisterController::class, 'edit'])->name('admin.user.edit');
    Route::put('/painel/client/update/{user}', [RegisterController::class, 'update'])->name('admin.user.update');
    
    Route::delete('/painel/client/delete/{user}', [RegisterController::class, 'destroy'])->name('admin.user.destroy');
});

Route::get('/loginadmin', [LoginadminController::class, 'index'])->name('loginadmin');
Route::post('/loginadmin', [LoginadminController::class, 'login_action'])->name('loginadmin.action');

