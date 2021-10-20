<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class PagesController extends Controller
{
    /**
     * Display The Home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'asc')->get();
        $newArrivals = Product::orderBy('id', 'desc')->get();
        $featuredItem = Product::orderBy('id', 'desc')->where('featured_item', 1)->get();

        return view('frontend.pages.home', compact('sliders', 'newArrivals', 'featuredItem'));
    }

    // All Products page.
    public function products()
    {
        $products = Product::orderBy('id', 'desc')->paginate(24);
        return view('frontend.pages.products.products', compact('products'));
    }

    // Single Product details view
    public function productshow($slug)
    {
        $value = Product::where('slug', $slug)->first();

        if(!is_null($value)){
            return view('frontend.pages.products.details', compact('value'));
        }
        else{
            return back();
        }
    }

    // Category wise Product page.
    public function productcategory()
    {
        return view('frontend.pages.products.products');
    }

    // Single Category details view
    public function categoryshow($slug)
    {
        return view('frontend.pages.products.details');
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
}
