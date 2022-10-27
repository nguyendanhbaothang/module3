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
    return view('show_discount_amount', compact(['discountAmount' , 'discountPercent','productDescription']));
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
    $textbox = $request->input('textbox');
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $textbox) {
            echo "Từ: " . $word . ". <br/>Có nghĩa là: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra."; 
}

$dictionarys = [
    "xin chào"  =>"hello" ,
    "thế nào"  => "how",
    "quyển vở" => "book",
    "máy tính" =>  "computer"
];
$tiengviet = $request->input('tiengviet');
$flag = 0;
foreach ($dictionarys as $word => $description) {
    if ($word == $tiengviet) {
        echo "Từ: " . $word . ". <br/>Có nghĩa là: " . $description;
        echo "<br/>";
        $flag = 1;
    }
}
if ($flag == 0) {
    echo "Không tìm thấy từ cần tra."; 
}


});
