<?php


use Illuminate\Support\Facades\Route;
use App\Modules\Web\Controllers\HomeController;

Route::group([], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/study-abroad', [HomeController::class, 'studyAbroad'])->name('study-abroad');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/course', [HomeController::class, 'course'])->name('course');
    Route::get('/course/{slug}/{id}', [HomeController::class, 'courseDetail'])->name('course-detail');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}/{id}', [HomeController::class, 'blogPost'])->name('blog-detail');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
    Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
    // Route::get('/sitemap', [HomeController::class, 'sitemap']);
    // Route::get('/error404', [HomeController::class, 'error404']);
});
