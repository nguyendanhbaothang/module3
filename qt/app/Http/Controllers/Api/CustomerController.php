<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Customer::all();
        return response()->json($items, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo '<pre>';
        // print_r($request->all());
        // die();
        $customer           = new Customer();
        $customer->name     = $request->name;
        $customer->dob      = $request->dob;
        $customer->email    = $request->email;
        $customer->save();
        return response()->json($customer, 201);
    }
    public function show($id)
    {
        $item = Customer::find($id);
        $status = 200;
        if(!$item){
            $status = 404;
        }
        return response()->json($item , $status);
    }
    public function update(Request $request, $id)
    {
        $customer           = Customer::find($id);
        $customer->name     = $request->name;
        $customer->dob      = $request->dob;
        $customer->email    = $request->email;
        $customer->save();
        return response()->json($customer, 201);
    }
    public function destroy($id)
    {
        $customer           = Customer::find($id);
        $customer->delete();
        return response()->json($customer, 200);
    }
}
