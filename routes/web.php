<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CommController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ----------------------------
// Public Routes (Home)
// ----------------------------

Route::controller(HomeController::class)->name('web.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('aboutUs');
    Route::get('/why-choose-us', 'whyChooseUs')->name('whyChooseUs');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact-us', 'contact')->name('contactUs');
    Route::post('/contact-store', 'contactStore')->name('contactStore');
    Route::get('/career', 'career')->name('career');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogs/{slug}', 'blogsDetail')->name('blogs_detail');
});

// ----------------------------
// Authentication Routes
// ----------------------------

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.submit');
    Route::post('/auth', 'auth')->name('admin.auth');
});

// ----------------------------
// Admin Routes
// ----------------------------

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Communication
    Route::post('/status-change', [CommController::class, 'statusChange'])->name('change.status');

    // Contact
    Route::get('/contact-us', [ContactController::class, 'index'])->name('contactUs');
    Route::delete('/contact-us/{id}', [ContactController::class, 'destroy'])->name('contactUs.destroy');

    // About Us
    Route::get('abouts', [AboutController::class, 'index'])->name('abouts');
    Route::get('abouts/create', [AboutController::class, 'create'])->name('abouts.create');
    Route::post('abouts', [AboutController::class, 'store'])->name('abouts.store');
    Route::get('abouts/{about}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
    Route::post('abouts/{about}', [AboutController::class, 'update'])->name('abouts.update');

    // Blogs
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

// ----------------------------
// User Routes
// ----------------------------

Route::middleware(['auth', 'isUser'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('user.profile');
    })->name('profile');

    Route::get('/setting', function () {
        return view('user.setting');
    })->name('setting');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
