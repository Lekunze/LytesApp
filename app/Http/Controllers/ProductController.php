<?php

namespace App\Http\Controllers;

use App\Product;
use App\Business;
use Illuminate\Support\Facades\Auth;
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
        //VALIDATION MISSING HERE

        $product = new Product();
        $get_business = Business::find(Auth::id());

        $business_slug = $get_business->business_slug;
        $path = '/' . $business_slug;
        //return $get_business;


        $product_slug = str_slug($request->product_name,'-');
        $images_path = $get_business->business_images . '/products/' . $product_slug;

        $product->bid = Auth::id();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;
        $product->product_shelf = $request->product_shelf;
        $product->product_slug = $product_slug;
        $product->product_images = $images_path;
        $product->save();

        //Persist Product Images
        $product_no = 0;
        foreach($request->products as $product){
            $product_no++;
            $product_lbl = "product_" . strval($product_no) . ".jpg"; //create dynamic labels (1-3) for cover images
            $product->storeAs(
                $images_path,$product_lbl
            );
        }

        return redirect()->intended($path);
    }

    /**
     * Search for product
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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
}
