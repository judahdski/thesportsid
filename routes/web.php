<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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

// features page
Route::get('/', [HomeController::class, 'showHomePage'])->name('home');
Route::get('/all_blogs', [BlogController::class, 'showAllBlogs'])->name('all-blogs');
Route::get('/about', [AboutController::class, 'index'])->name('about');


// search
Route::get('/search-bar', [HomeController::class, 'searchBar'])->middleware(['auth'])->name('search-bar');
Route::get('/info-section', [HomeController::class, 'infoSection'])->middleware(['auth'])->name('info-clubs');

// blogs
Route::get('/blogs/{blog:slug}', [BlogController::class, 'getBlogs']);
Route::get('/blogs/category/{category:slug}', [BlogController::class, 'sortByCategory']);

Route::get('/news/{news:slug}', [BlogController::class, 'getNews']);



// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
// --feedback
Route::resource('feedback', FeedbackController::class);
// --profile
Route::resource('user', UserController::class);
// --user blog manager
Route::resource('blog', BlogController::class);
require __DIR__.'/auth.php';
