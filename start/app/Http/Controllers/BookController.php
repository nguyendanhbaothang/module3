<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = Book::all();
        $items = DB::table('books')->get();
        dd($items->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Eloquent
        $book = new Book();
        $book->name = 'Chị Dậu';
        $book->category_id = 2;
        $book->price = 2000;
        $book->description ='Tác phẩm hay';
        $book->save();

        // Querybuider
        DB::table('books')->insert([

                'category_id' => 1,
                'name' => 'Lão Hạc',
                'price' => 1234,
                'description' => 'Hữu Nhân'

        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //select * from books where id = $id
        // $item = Book::find($id);
        $item = DB::table('books')->where('id','=',$id)->first();




        dd( $item );
        // dd( $item->toArray() );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book =  Book::find($id);
        $book->name = 'Chị Dậu 3';
        $book->category_id = 2;
        $book->price = 2000;
        $book->description ='Tác phẩm hay';
        $book->save();

        DB::table('books')
        ->where('id',$id)
        ->update([
                'name' => 'Chị Dậu 4',
                'price' => 3000,
        ]);

        //xóa
        $book = Book::find($id);
        $book->delete();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
