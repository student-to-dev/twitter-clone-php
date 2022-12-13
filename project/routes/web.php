<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as Post;
use App\Http\Controllers\AdminController as Admin;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
return view('dashboard');
    })->name('dashboard');
    
});

// Route::prefix('front')->group(function () {
    Route::get('all-posts', [Post::class, 'index'])->name('all-posts')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
    Route::get('new-post', [Post::class, 'create'])->name('new-post')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
    Route::post('', [Post::class, 'store'])->name('store')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
    
// });

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [Admin::class, 'adminDash'])->name('dashboard')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
    Route::get('posts', [Admin::class, 'adminPosts'])->name('posts')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
    Route::get('users', [Admin::class, 'adminUsers'])->name('users')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
    
});


