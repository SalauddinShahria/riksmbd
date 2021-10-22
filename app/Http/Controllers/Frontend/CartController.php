<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Cart;
use App\Models\Backend\Category;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.cart');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id'    => 'required',
        ],
        [
            'product_id.required' => 'Please Choose a Product',
        ]);

        if( Auth::check() )
        {
            $cart = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();
        }
        else{
            $cart = Cart::where('ip_address', request()->ip() )->where('product_id', $request->product_id)->first();
        }

        if(!is_null ($cart) ){
            $cart->increment('product_quantity');
        }
        else{
            $cart = new Cart();

            if ( Auth::check() )
            {
                $cart->user_id = Auth::id();
            }
            $cart->ip_address           = $request->ip();
            $cart->product_id           = $request->product_id;
            $cart->product_quantity     = $request->product_quantity;
            $cart->save();
        }

        return back();
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
        $cart = Cart::find($id);

        if( !is_null($cart) ){
            $cart->delete();
        }
        else{
            return back();
        }
        return back();
    }
}
