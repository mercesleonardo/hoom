<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LinkController;

use App\Http\Controllers\PainelController;
use App\Http\Controllers\LoginadminController;


// Middleware Authentication client
Route::middleware(['client'])->group(function() {
    //Dashboard routes
    Route::get('/client/dashboard', [DashboardController::class, 'index'])->name('client.dashboard');
    Route::get('/client/logout', [DashboardController::class, 'logout'])->name('client.logout');

    //Projects routes
    Route::get('/client/projects', [ProjectController::class, 'index'])->name('client.projects');
    Route::get('/client/project/{project}', [ProjectController::class, 'show'])->name('client.project');

    //Blogs routes
    Route::get('/client/blogs', [BlogController::class, 'indexblogs'])->name('client.dashboard.blogs');
    Route::get('client/blog/{blog}', [BlogController::class, 'showblog'])->name('client.dashboard.blog');

    Route::get('/client/link/{link}', [LinkController::class, 'show'])->name('client.link.show');



});

//Home client routes
Route::get('/', [HomeController::class, 'index'])->name('client.home');

//Login client routes
Route::get('/client/login', [LoginController::class, 'index'])->name('client.login');
Route::post('/client/login', [LoginController::class, 'login_action'])->name('client.login.action');

//Register client routes
Route::get('/client/register', [RegisterController::class, 'index'])->name('client.register');
Route::post('/client/register', [RegisterController::class, 'store'])->name('client.register.store');



// Middleware Authentication admin
Route::middleware(['admin'])->group(function() {

    Route::get('/admin/painel', [PainelController::class, 'index'])->name('admin.painel');
    Route::get('/admin/logout', [PainelController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blogs/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blogs/edit/{blog}', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blogs/update/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blogs/delete/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    Route::get('/admin/user', [RegisterController::class, 'painelClient'])->name('admin.user.index');
    Route::get('/admin/user/create', [RegisterController::class, 'create'])->name('admin.user.create');
    Route::post('admin/user/store', [RegisterController::class, 'userstore'])->name('admin.user.store');
    Route::get('admin/user/edit/{user}', [RegisterController::class, 'edit'])->name('admin.user.edit');
    Route::put('/admin/user/update/{user}', [RegisterController::class, 'update'])->name('admin.user.update');
    Route::delete('/admin/user/delete/{user}', [RegisterController::class, 'destroy'])->name('admin.user.destroy');

    Route::get('/admin/projects', [ProjectController::class, 'indexpainel'])->name('admin.projects.index');
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/admin/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/admin/projects/edit/{project}', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/admin/projects/update/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/admin/projects/delete/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');

    Route::get('/admin/links', [LinkController::class, 'index'])->name('admin.links.index');
    Route::get('/admin/links/create', [LinkController::class, 'create'])->name('admin.links.create');
    Route::post('/admin/links/store', [LinkController::class, 'store'])->name('admin.links.store');
    Route::get('/admin/links/edit/{link}', [LinkController::class, 'edit'])->name('admin.links.edit');
    Route::put('/admin/links/update/{link}',[LinkController::class, 'update'])->name('admin.links.update');
    Route::delete('/admin/links/delete/{link}', [LinkController::class, 'destroy'])->name('admin.links.destroy');
});

Route::get('/admin/login', [LoginadminController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginadminController::class, 'login_action'])->name('admin.login.action');

