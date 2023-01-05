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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    //Projects routes
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project');

    //Blogs routes
    Route::get('/client/blogs', [BlogController::class, 'indexblogs'])->name('client.dashboard.blogs');
    Route::get('client/blog/{blog}', [BlogController::class, 'showblog'])->name('client.dashboard.blog');

    Route::get('/client/link/{link}', [LinkController::class, 'show'])->name('client.link.show');



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

Route::get('/loginadmin', [LoginadminController::class, 'index'])->name('loginadmin');
Route::post('/loginadmin', [LoginadminController::class, 'login_action'])->name('loginadmin.action');

