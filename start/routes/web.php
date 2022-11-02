<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Order;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('hasMany', function () {
    $category = Category::find(1);
    dd($category->books->toArray());
});
Route::get('belongsTo', function () {
    $book = Book::find(2);
    dd($book->category->toArray());
});
Route::get('manyToMany', function () {
    $book = Book::find(1);
    dd($book->orders->toArray());
});

Route::get('manyToMany2', function () {
    $order = Order::find(1);
    dd($order->books->toArray());
});

Route::get('hasOne', function () {
    $category = Category::find(1);
    dd($category->book->toArray());
});

































Route::group([
    'prefix' => 'products'
], function () {
    // Route::get('/', function () {
    //     echo 'trang danh sách ';
    // })->name('products.index');

     // Route::get('create', function () {
    //     echo 'trang thêm mới ';
    // })->name('products.create');

    // Route::post('store', function () {
    //     echo 'xử lí thêm mới ';
    // })->name('products.store');

     // Route::get('show/{id}', function ($id) {
    //     echo 'xem chi tiết ' . $id;
    // })->name('products.show');

    // Route::get('edit/{id}', function ($id) {
    //     echo 'trang cập nhật ' . $id;
    // })->name('products.edit');


    // Route::put('update/{id}', function ($id) {
    //     echo 'xử lí cập nhật ' . $id;
    // })->name('products.update');

    // Route::delete('destroy/{id}', function ($id) {
    //     echo 'xóa ' . $id;
    // })->name('products.destroy');
Route::get('/create',[ProductController::class,'create'])->name('products.create')->middleware('checkage');
Route::post('/',[ProductController::class,'store'])->name('products.store');
Route::get('/{id}',[ProductController::class,'show'])->name('products.show');
Route::get('/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/{id}',[ProductController::class,'update'])->name('products.update');
Route::delete('/{id}',[ProductController::class,'destroy'])->name('products.destroy');

Route::get('/',[ProductController::class,'showform'])->name('products.showform');
Route::post('/baitapmaytinh',[ProductController::class,'hienthi'])->name('products.baitapmaytinh');

});
Route::resource('customers',CustomerController::class);
Route::resource('books',BookController::class);












Route::get('baitap1', function () {
    return view('baitap1');
});
Route::post('baitap1', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('productDescription');
    $discountPrice = $request->input('discountPrice');
    $discountPercent =  $request->input('discountPercent');
    $discountAmount = $discountPrice * $discountPercent * 0.1;
    return view('show_discount_amount', compact(['discountAmount', 'discountPercent', 'productDescription']));
});
Route::get('tu_dien_don_gian', function () {
    return view('tu_dien_don_gian');
});
Route::post('tu_dien_don_gian', function (Illuminate\Http\Request $request) {
    $dictionary = [
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính"
    ];
    $dictionarys = [
        "xin chào"  => "hello",
        "thế nào"  => "how",
        "quyển vở" => "book",
        "máy tính" =>  "computer"
    ];
    $textbox = $request->input('textbox');
    $dich = $request->input('dich');
    $flag = 0;
    switch ($dich) {
        case 'tienganh':
            foreach ($dictionary as $word => $description) {
                if ($word == $textbox) {
                    echo "Từ: " . $word . ". <br/>Có nghĩa là: " . $description;
                    echo "<br/>";
                    $flag = 1;
                }
            }
            if ($flag == 0) {
                echo "Không tìm thấy từ cần tra." . '<br>';
            }
            break;
        case 'tiengviet':
            foreach ($dictionarys as $word => $description) {
                if ($word == $textbox) {
                    echo "Từ: " . $word . ". <br/>Có nghĩa là: " . $description;
                    echo "<br/>";
                    $flag = 1;
                }
            }
            if ($flag == 0) {
                echo "Không tìm thấy từ cần tra." . '<br>';
            }
            break;
    }
});
Route::get('kiem_tra_email', function () {
    return view('kiem_tra_email');
});
Route::post('kiem_tra_email', [UserController::class, 'validationEmail'])->name('checkEmail');





