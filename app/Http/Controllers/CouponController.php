<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where("coupoun", $request->coupon_code)->first();


        if(!$coupon){
            return redirect()->route('checkout')->withErrors("Invalid Coupon Code");
        }


        session()->put('coupon', [
            'name' =>$coupon->code,
            'discount' => $coupon->discount(Cart::subtotal())
        ]);
        return redirect()->route('checkout')->with("Success Message", "Coupon has been applied");


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
