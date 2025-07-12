<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

/*
|--------------------------------------------------------------------------
| Testing & Static Routes
|--------------------------------------------------------------------------
*/

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/Products', function () {
    return view('products');
});

Route::get('/Contact-us', function () {
    return view('contact-us');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::post('/quote-request', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/quote-request', [QuoteController::class, 'create'])->name('quote.form');


/* ----------  Public Gallery  ---------- */
Route::get('/gallery-page', [GalleryController::class, 'publicGallery'])
    ->name('public.gallery');
Route::get('/gallery/load-more', [GalleryController::class, 'loadMore'])->name('gallery.loadMore');


/*
|--------------------------------------------------------------------------
| User Authentication & Public Pages
|--------------------------------------------------------------------------
*/

// User Registration
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Default Landing Page
Route::get('/', [FrontendController::class, 'index'])->name('home');

// About Page (Frontend)
Route::get('/About', [AboutController::class, 'index'])->name('about');

// Project Display for Frontend
Route::get('/Projects', [ProjectsController::class, 'show_projects'])->name('projects');
Route::get('/know-more', [ProjectsController::class, 'know_more'])->name('projects.know_more');

// Route::get('/gallery-page', [FrontendController::class, 'publicGallery'])
//     ->name('public.gallery');
// Route::get('/gallery/load-more', [FrontendController::class, 'loadMore'])->name('gallery.loadMore');



/*
|--------------------------------------------------------------------------
| User Dashboard (Authenticated Users Only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    // User Dashboard
    Route::get('/userdashboard', [AdminController::class, 'userDashboard']);

    // File Upload (Survey - Silchar)
    Route::post('/upload-files', [UploadController::class, 'storeUploads'])->name('upload-files');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Admin Authentication
Route::get('admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Admin Dashboard (Protected with Middleware)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');

    /*
    |--------------------------------------------------------------------------
    | About Management
    |--------------------------------------------------------------------------
    */
    Route::get('/About/view', [AboutController::class, 'show'])->name('admin.about.view');
    Route::get('/About/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::post('/About/update', [AboutController::class, 'update'])->name('admin.about.update');

    /*
    |--------------------------------------------------------------------------
    | Product Management
    |--------------------------------------------------------------------------
    */
    Route::get('/Product/view', [ProductController::class, 'show'])->name('admin.product.view');
    Route::get('/Product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('/Product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::get('/Product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/Product/store', [ProductController::class, 'store'])->name('admin.product.store');

    /*
    |--------------------------------------------------------------------------
    | Project Management
    |--------------------------------------------------------------------------
    */
    Route::get('/projects', [ProjectsController::class, 'index'])->name('admin.project.view');
    Route::get('/projects/create', [ProjectsController::class, 'create'])->name('admin.project.create');
    Route::post('/projects/store', [ProjectsController::class, 'store'])->name('admin.project.store');
    Route::get('/projects/edit/{id}', [ProjectsController::class, 'edit'])->name('admin.project.edit');
    Route::post('/projects/update/{id}', [ProjectsController::class, 'update'])->name('admin.project.update');
    Route::delete('/projects/delete/{id}', [ProjectsController::class, 'destroy'])->name('admin.project.delete');

    /*
    |--------------------------------------------------------------------------
    | Silchar Survey Uploads
    |--------------------------------------------------------------------------
    */
    Route::get('/silchar/uploads', [UploadController::class, 'silcharUsers'])->name('admin.silchar.users');
    Route::get('/silchar/uploads/{user}', [UploadController::class, 'silcharUserFiles'])->name('admin.silchar.user.files');

    /*
    |--------------------------------------------------------------------------
    |  Quotes
    |--------------------------------------------------------------------------
    */
    Route::get('/admin/quotes', [QuoteController::class, 'index'])->name('admin.quotes.index');


    /*
    |--------------------------------------------------------------------------
    |  Gallery Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/gallery/{gallery}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])
        ->name('admin.gallery.edit');
    // <- note the name
    Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])
        ->name('admin.gallery.update');



});

/*
|--------------------------------------------------------------------------
| Laravel Auth Routes
|--------------------------------------------------------------------------
*/

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');



// Route::get('/test-mail', function () {
//     Mail::raw('This is a test email from Laravel using Hostinger SMTP.', function ($message) {
//         $message->to('info@ckgeotech.in')
//                 ->subject('Laravel SMTP Test');
//     });

//     return 'Test email sent!';
// });