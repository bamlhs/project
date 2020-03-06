<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index(){
        return View("checkout.index");
    }

    public function payment(Request $request){

        $contents = Cart::content()->map(function($item){
            return $item->model->name .', '. $item->qty;
        });
 
        return View("checkout.payment");
    }

    public function gateway(Request $request){
        dd($request);
return View("checkout.gateway");
    }
}
