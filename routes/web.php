<?php

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
Route::get('baitap1', function () {
    return view('baitap1');
});
Route::post('baitap1', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('productDescription');
    $discountPrice = $request->input('discountPrice');
    $discountPercent =  $request->input('discountPercent');
    $discountAmount = $discountPrice * $discountPercent * 0.1;
    return view('show_discount_amount', compact(['discouRequestntPrice', 'discountAmount' , 'discountPercent','productDescription']));
});