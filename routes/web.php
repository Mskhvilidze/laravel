<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfile;

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

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::get('/login', [PagesController::class, 'login']);

Route::get('/register', [PagesController::class, 'register']);

Route::get('/profile/{id}', [UserProfile::class, 'profile']);

Route::get('/profile/{id}', [UserProfile::class, 'invoke'])->name('invoke');

Route::resource('posts', 'App\Http\Controllers\PostController')->name('*', 'posts');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');