<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductVariation;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(){

        return View("cart.index")->with([
            'tax' => $this->getNumbers()->get('tax'),
            'discount' => $this->getNumbers()->get('discount'),
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal'),
            "shipping" => $this->getNumbers()->get("shipping"),
        ]); 

    }

    public function changeQuantity(Request $request, $id){
        Cart::update($id,["qty" => $request->quantity]);
        return response()->json(['success' =>  true, "total"=> Cart::total(),"counter" => Cart::count(), "shipping" => $this->getNumbers()->get("shipping")]);
    }


    public function empty(){
        Cart::Destroy();
        return View("cart.index");
    }

    public function remove($id){
        Cart::remove($id);
        return response()->json(['success' =>  true, "total"=> Cart::total(),"counter" => Cart::count(), "shipping" => $this->getNumbers()->get("shipping")]);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {

                $variation = ProductVariation::findOrFail($request->id);
                $product = Product::findOrFail($variation->product_id);

                $cartItem = Cart::add([
                     'id' => $variation->id,
                     'name' => $product->name .' - '. $variation->productVariantName,
                     'qty' => 1,
                     'price' => ($variation->price - $variation->discount) ,
                     "weight" => "5",
                 ]);
 
                 Cart::associate($cartItem->rowId, 'App\Product');
                 return redirect()->route('cart');
            }
        }

        private function getNumbers(){
            $tax = config('cart.tax') / 100;
            $discount = session()->get('coupon')['discount'] ?? 0;
            $newSubtotal = (Cart::total() - $discount);
            $newTax = ($newSubtotal * $tax);
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
