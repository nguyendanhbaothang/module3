<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function showform()
    {
        return view('baitapmaytinh');
    }

    public function hienthi(Request $request)
    {
        $sothunhat = $request->sothunhat;
        $sothuhai = $request->sothuhai;
        $pheptinh = $request->pheptinh;

         if($sothunhat!="" && $sothuhai!= ""){
                switch ($pheptinh) {
                    case '+':
                        $ketqua = $sothunhat + $sothuhai;
                        echo $ketqua ;
                        break;
                        case '-':
                            $ketqua = $sothunhat - $sothuhai;
                            echo $ketqua ;
                            break;
                            case '*':
                                $ketqua = $sothunhat * $sothuhai;
                                echo $ketqua ;
                                break;
                                case '/':
                                    if($sothuhai == 0){
                                        echo 'l???i';
                                    }else{
                                        $ketqua = $sothunhat / $sothuhai;
                                        echo $ketqua ;
                                    }
                                    break;
                }}else{
                    echo 'nh???p s??? ??i th???ng ngu';
                }
                return view('baitapmaytinh');
    }


}
