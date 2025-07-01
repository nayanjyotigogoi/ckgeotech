<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('welcome');
});



Route::get('/', [FrontendController::class, 'index'])->name('home');


Route::get('/About', [AboutController::class, 'index'])->name('about');

Route::get('/Products', function () {
    return view('products');
});




Route::get('/Projects', [ProjectsController::class, 'show_projects'])->name('projects');
Route::get('/know-more', [ProjectsController::class, 'know_more'])->name('projects.know_more');



Route::get('/Contact-us', function () {
    return view('contact-us');
});


//admin login routes
// Admin login/logout routes
Route::get('admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


// Admin dashboard route
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.index');

// Admin About route
Route::get('/About/view', [AboutController::class, 'show'])->name('admin.about.view');
Route::get('/About/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
Route::post('/About/update', [AboutController::class, 'update'])->name('admin.about.update');

//product route
Route::get('/Product/view', [ProductController::class, 'show'])->name('admin.product.view');
Route::get('/Product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/Product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
Route::get('/Product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/Product/store', [ProductController::class, 'store'])->name('admin.product.store');


// Projects
Route::get('/admin/projects', [ProjectsController::class, 'index'])->name('admin.project.view');
Route::get('/projects/create', [ProjectsController::class, 'create'])->name('admin.project.create');
Route::post('/projects/store', [ProjectsController::class, 'store'])->name('admin.project.store');
Route::get('/projects/edit/{id}', [ProjectsController::class, 'edit'])->name('admin.project.edit');
Route::post('/projects/update/{id}', [ProjectsController::class, 'update'])->name('admin.project.update');
Route::delete('/projects/delete/{id}', [ProjectsController::class, 'destroy'])->name('admin.project.delete');
