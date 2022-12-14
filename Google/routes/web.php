<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);


















Route::resource('customers',CustomerController::class);

Route::get('dang-nhap-tu-dong',function(){
    Auth::loginUsingId(6);
    return redirect('customers');
});
