<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
      protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps  = true;

    public function blog(){
        /*
        categories
        id
        books
        category_id
        */
        return $this->hasMany(Blog::class,'category_id','id');
    }

}

