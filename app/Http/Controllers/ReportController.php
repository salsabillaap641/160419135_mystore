<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function showAllProducts()
    {
        
        //db query
        // $listdata = DB::select('SELECT * FROM products');

        //eloquent
        $listdata = Product::all();
        
        // dd($listdata);
        
    }

    public function showNameFormPriceProducts()
    {
        
        //db query
        // $listdata = DB::table('products')
        //             ->select('generic_name','price','form')
        //             ->get();

        //eloquent
        $listdata = Product::select('generic_name','price','form')
                    ->get();
        dd($listdata);
        
    }

    public function showAllCategories()
    {
        
        //db query
        // $listdata = DB::select('SELECT * FROM categories');

        //eloquent
        $listdata = Category::all();
        return view('report.soal1', compact('listdata'));
        // dd($listdata);
        
    }

    public function showAllProductsWithCat()
    {
        
        //db query
        // $listdata = DB::table('products')
        //     ->join('categories', 'products.category_id', '=', 'categories.id')
        //     ->select('products.generic_name', 'products.form', 'categories.name')
        //     ->get();

        //eloquent
        $listdata = Product::join('categories', 'products.category_id', '=', 'categories.id')
                    ->select('products.generic_name', 'products.form', 'categories.name')
                    ->get();
        dd($listdata);
        
    }

    public function showCategoryHaveProducts()
    {
        //db query
        // $listdata = DB::table('categories')
        //     ->join('products', 'categories.id', '=', 'products.category_id')
        //     ->distinct()
        //     ->count('categories.id');

        //eloquent
        $listdata = Category::join('products', 'categories.id', '=', 'products.category_id')
                    ->distinct()
                    ->count('categories.id');
        dd($listdata);
        
    }

    public function showCategoryNoProducts()
    {
        //db query
        // $listdata = DB::table('categories')
        //     ->leftJoin('products', 'categories.id', '=', 'products.category_id')
        //     ->where('products.category_id',NULL)
        //     ->get();

        //eloquent
        $listdata = Category::leftJoin('products', 'categories.id', '=', 'products.category_id')
                    ->where('products.category_id',NULL)->get();
        dd($listdata);
        
    }
    public function showAvgPriceCategory()
    {
        //db query
        // $listdata = DB::table('categories')
        //     ->select('categories.name', DB::raw('IFNULL(AVG(products.price),0) as average'))
        //     ->join('products', 'categories.id', '=', 'products.category_id')
        //     ->groupBy('categories.id')
        //     ->get();

        //eloquent
        $listdata = Category::select('categories.name', DB::raw('IFNULL(AVG(products.price),0) as average'))
                    ->join('products', 'categories.id', '=', 'products.category_id')
                    ->groupBy('categories.id')
                    ->get();
        dd($listdata);
        
    }

    public function showCategorySatuProduct()
    {
        //db query
        // $listdata = DB::table('categories')
        //     ->join('products', 'categories.id', '=', 'products.category_id')
        //     ->select('categories.name', 'products.generic_name')
        //     ->groupBy('categories.name')
        //     ->havingRaw('COUNT(products.id)=?',[1])
        //     ->get();

        //eloquent
        $listdata = Category::join('products', 'categories.id', '=', 'products.category_id')
                    ->select('categories.name','products.generic_name')
                    ->groupBy('categories.name')
                    ->havingRaw('COUNT(products.id)=?',[1])
                    ->get();
        dd($listdata);
        
    }

    public function showProductSatuForm()
    {
        //db query
        // $listdata = DB::table('products')
        //     ->groupBy('generic_name')
        //     ->havingRaw('COUNT(form)=?',[1])
        //     ->get();

        //eloquent
        $listdata = Product::groupBy('generic_name')
                    ->havingRaw('COUNT(form)=?',[1])
                    ->get();
        dd($listdata);
        
    }

    public function showCategoryWithHighPrice()
    {
        //db query
        // $listdata = DB::table('products')
        //     ->select('categories.name','products.generic_name', 'products.id')
        //     ->join('categories', 'products.category_id', '=', 'categories.id')
        //     ->where('products.price', '=', function($query){
        //         $query -> select( DB::raw('max(products.price) as max'))
        //         ->from('products');
        //     })
        //     ->get();

        //eloquent
        $product = Product::all();
        $max = $product->max('price');
        $productWithMax = $product->where('price',$max);
        dd($productWithMax);
        
    }


}
