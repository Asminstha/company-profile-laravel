<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\AboutController;



// FRONTEND ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/services', [HomeController::class, 'services'])->name('services');



Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::post('/contact-submit', [ContactController::class, 'store'])
    ->name('contact.submit');


// REDIRECT DEFAULT DASHBOARD TO ADMIN
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
// admin dashboard route
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // services crud routes
    Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

//   contact message routes
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages.index');
Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');


// SEO routes

Route::get('/admin/seo', [SeoController::class, 'index'])->name('admin.seo');
Route::post('/admin/seo', [SeoController::class, 'update'])->name('admin.seo.update');

// about page routes
   Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');

    Route::post('/admin/about', [AboutController::class, 'update'])->name('admin.about.update');

// service detail route for frontend
    Route::get('/services/{id}', [HomeController::class, 'serviceDetail']);




});

require __DIR__.'/auth.php';
