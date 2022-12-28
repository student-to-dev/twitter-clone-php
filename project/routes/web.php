<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as Post;
use App\Http\Controllers\AdminController as Admin;
use App\Http\Livewire\AllPosts as AllPosts;


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

Route::view('/', 'welcome')->name('home');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
// return view('dashboard');
//     })->name('dashboard');
    
//});

// Route::prefix('front')->group(function () {
    Route::get('all-posts', [AllPosts::class, 'mount'])->name('all-posts')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
   // Route::get('new-post', [Post::class, 'create'])->name('new-post')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
  //  Route::post('', [Post::class, 'store'])->name('store')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
  // Route::get('log-out', [Post::class, 'toUserLogout'])->name('log-out')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
  Route::view('log-out', 'front.logout')->name('log-out')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
  Route::get('show/{post}', [AllPosts::class, 'show'])->name('show-post')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);

// });


Route::prefix('admin')->group(function () {
    Route::get('dashboard', [Admin::class, 'adminDash'])->name('dashboard')->middleware(['auth:sanctum', 'user.role:admin', config('jetstream.auth_session'), 'verified']);
    Route::get('posts', [Admin::class, 'adminPosts'])->name('posts')->middleware(['auth:sanctum', 'user.role:admin', config('jetstream.auth_session'), 'verified']);
    Route::get('users', [Admin::class, 'adminUsers'])->name('users')->middleware(['auth:sanctum', 'user.role:admin', config('jetstream.auth_session'), 'verified']);
    Route::get('leave', [Admin::class, 'toAdminLogout'])->name('leave')->middleware(['auth:sanctum', 'user.role:admin', config('jetstream.auth_session'), 'verified']);

});


