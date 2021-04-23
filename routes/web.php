<?php

use Illuminate\Support\Facades\Route;
use  App\Models\Blog;
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
    return view('home',[ 'blogs' => Blog::paginate(10)]);
});

Route::get('/home', function () {
    return view('blogs.show',[ 'blogs' => Blog::paginate(10)]);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('blogs', App\Http\Controllers\BlogController::class);

