<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #query raw
        $listdata = DB::select(DB::raw('select * from products where category_id=1'));
        

        #query builder
        // $listdata = DB::table('products')->get();
        return view ('product.index', compact('listdata'));
        

        #elo
        // $listdata = Product::all();
        // dd($listdata);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $res= Product::find($product);
        $message="";
        if($res) $message=$res;
        else $message=null;
        return view('product.show', compact ('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function showInfo()
            {
            $result=Product::orderBy('price','DESC')->first();
            return response()->json(array(
                'status'=>'oke',
                'msg'=>"<div class='alert alert-info'>
                Did you know? <br>The most expensive product is ". $result->generic_name . "</div>"
            ),200);
            }

   
}
