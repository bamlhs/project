<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index(){
        return View("checkout.index")->with([
            'tax' => $this->getNumbers()->get('tax'),
            'discount' => $this->getNumbers()->get('discount'),
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal'),
            "shipping" => $this->getNumbers()->get("shipping"),
        ]);
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

    public function confirm(Request $request){
        dd($request);
        return View("checkout.gateway");
    }


    private function getNumbers(){
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = (Cart::total() - $discount);
        $newTax = $newSubtotal * $tax;
        $shipping = ($newSubtotal > 200) ? 0 : "20";
        $newTotal = ($newSubtotal * (1+ $tax)) + $shipping;
        
 
        return collect([
            'tax' => $tax,
            'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
            "shipping" => $shipping,
        ]);
    }


}
