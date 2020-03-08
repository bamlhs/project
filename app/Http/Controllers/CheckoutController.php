<?php

namespace App\Http\Controllers;

use App\Order;
use App\Profile;
use App\Paytabs;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function index(){
       
        $merchant_email = "amiranis2012@gmail.com";
        $merchant_key = "gMa3YRRsruaesOmWkBKRwB696vasLx12kb5i3WKurVIUK4Q4GBWcc2mixwLj4MloYrH2oswPneJ8jAcZb8cnayGI5s29enxdOffc";
       
        $profile =  (Auth::user()) ? Profile::where("user_id", Auth::id())->first() : '';
 
        if(Cart::count()<1){
            return redirect()->route('shop');
        }

        return View("checkout.index")->with([
            'tax' => $this->getNumbers()->get('tax'),
            'discount' => $this->getNumbers()->get('discount'),
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal'),
            "shipping" => $this->getNumbers()->get("shipping"),
            "profile" => $profile,
            "paytabs" =>  App::make('App\paytabs',[
                "merchant_email" => $merchant_email,
                "secret_key" => $merchant_key,
            ]),
        ]);
    }
 











    public function payment(Request $request){
        
     $contents = Cart::content()->map(function($item){
                 return $item->model->name .', '. $item->qty .'.';
         });


     Validator::make($request->all(), [
        'name' => 'required|max:100',
        'phone' => 'required|phone:sa',
        'province' => 'required',
        'city' => 'required',
        'block' => 'required',
        'street' => 'required',
        'payment_method' => 'required',
    ])->validate();

        $order = Order::create([
            "user_id" => (Auth::id()) ? Auth::id() : null,
            'name' => $request->name,
            'phone' => $request->phone,
            'province' =>$request->province,
            'city' => $request->city,
            'block' => $request->block,
            'street' => $request->street,
            'place-extra' =>  $request->place_extra,
            'payment_method' => $request->payment_method,
            "billling_name_on_card" => $request->holder,
            'billling_subtotal' => $this->getNumbers()->get('newSubtotal'),
            'billling_tax'=> $this->getNumbers()->get('tax'),
            'billling_total'=> $this->getNumbers()->get('newTotal'),
            'billling_discount'=> $this->getNumbers()->get('discount'),
            'shipped'=>  false,

        ]); 



        foreach(Cart::content() as $item){
            OrderProduct::create([
                "product_id" =>  $item->id,
                "order_id" => $order->id,
                "quantity" => $item->qty,
            ]);  
        }

        
        
        if($request->payment_method == "1"){
            return View("checkout.purchase")->with(["order" => $order, "items" =>  $contents]);
        }
        
        Cart::destroy();
         
        session()->remove("coupon");

        return View("checkout.gateway");
    }

    public function gateway(Request $request){
        dd($request);
        return View("checkout.gateway");
    }
    
    public function purchase(Request $request){
        dd($request);
                
        Cart::destroy();
         
        session()->remove("coupon");
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
