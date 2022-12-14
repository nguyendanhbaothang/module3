<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginCookieController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);
Route::resource('blog', BlogController::class);


Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');

Route::get('/login1', [LoginController::class, 'show'])->name('show.login1');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');








Route::get('products', [ProductController::class, 'index'])->name('index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('show');

Route::get('logincookie', [\App\Http\Controllers\LoginCookieController::class, 'showFormLogin'])->name('auth.showFormLogin');
Route::post('logincookie', [\App\Http\Controllers\LoginCookieController::class, 'login'])->name('auth.login');
Route::get('home', function () {
    return view('welcome');
})->name('home.index');
