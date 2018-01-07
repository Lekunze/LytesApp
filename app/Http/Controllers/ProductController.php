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
    public function index(Request $request)
    {
        //

        if(!$request->has('product')){
            return view('pages.new-ui.app-search');
        }

        $products = ""; //Result
        $product = $request->product;
        $category = $request->category;
        $minPrice = $request->min;
        $maxPrice = $request->max;

        //return \Response::json($maxPrice);
        //$maxPrice = 10000000000;


        //return $category;
        if (empty($category) || $category==0){

            //$products = Product::query();
            $products = Product::where('product_name','like',"%$product%");
//            $products->whereBetween('product_price',[$minPrice,$maxPrice]);
            $products = $products->join('BUSINESSES','BUSINESSES.id','=','PRODUCTS.bid')
                ->select('PRODUCTS.product_name','PRODUCTS.product_price','PRODUCTS.product_slug','PRODUCTS.product_images',
                    'BUSINESSES.business_slug','BUSINESSES.business_name', 'BUSINESSES.business_area', 'BUSINESSES.business_number');

            if($request->has('filter')){
                $filter = $request->filter;
                switch ($filter){
                    case '1':
                        $products->orderBy('product_price','asc');
                        break;
                    case '2':
                        $products->orderBy('product_price','desc');
                        break;
                    default:
                        break;
                }

            }

            //$products->get();

            $products = $products->paginate(9);
            //$products->appends(['product' => $product]);


        }elseif(!empty($category)){
            $categories = explode(",",$category);

            //Search product
            $products = Product::query();
            $products = $products->where('product_name','like',"%$product%");
            $products->whereBetween('product_price',[$minPrice,$maxPrice]);

            if(sizeof($categories)>1){
                $products->whereIn('product_category',$categories);
            }else{
                $products->where('product_category','=',$category);
            }


            $products = $products->join('BUSINESSES','BUSINESSES.id','=','PRODUCTS.bid')
                ->select('PRODUCTS.product_name','PRODUCTS.product_price','PRODUCTS.product_slug','PRODUCTS.product_images',
                    'BUSINESSES.business_slug','BUSINESSES.business_name', 'BUSINESSES.business_area', 'BUSINESSES.business_number');

            if($request->has('filter')){
                $filter = $request->filter;
                switch ($filter){
                    case '1':
                        $products->orderBy('product_price','asc');
                        break;
                    case '2':
                        $products->orderBy('product_price','desc');
                        break;
                    default:
                        break;
                }

            }

            //return $products;

            $products = $products->paginate(9);

            //$products = $products->get();
        }

        if(!\Request::ajax()){
            //return Input::get('product');
            //$products = null;
            //return $products;
            $request->session()->keep(['product']);
            //return redirect()->intended('/search')->with('products',$products);
            return view('pages.new-ui.app-search',compact('products'));
            //return redirect('/search')->with(compact('products'));
            //return $products;
        }
        else{
            return \Response::json($products);
        }
        //return "Hello";

        //return "Categories: " . $category;


        //return \Response::json($category);
        //$category = Input::get('category');
        //$location = Input::get('location');

        return view('search-results',compact('products','shelves'));
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
        $product->product_description = $request->product_description;
        $product->product_category = $request->product_category;
        $product->sid = $request->product_shelf;
        $product->product_slug = $product_slug;
        $product->product_images = $images_path;
        $product->save();

        //Persist Product Images
        $product_no = 0;
        foreach($request->products as $product){
            $product_no++;
            $product_lbl = "product_" . strval($product_no) . ".jpg"; //create dynamic labels (1-3) for cover images
            $product->storeAs(
                str_replace("storage","public",$images_path),$product_lbl
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
        return "Show";
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
        return "Hello";
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
