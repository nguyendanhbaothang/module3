<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function books(){


        return $this->belongsToMany(
        Book::class, // tên class
        'order_detail', // tên bảng trung gian
        'order_id',// khóa ngoại tham chiếu bảng hiện tại
        'book_id');// khóa ngoại tham chiếu bảng quan hệ

}
}
