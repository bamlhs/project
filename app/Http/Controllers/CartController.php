<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    
    public function index(){

        return View("cart.index");

    }

    public function empty(){
        Cart::Destroy();
        return View("cart.index");
    }

    public function remove($request){
        Cart::remove($request->id);
        return View("cart.index");
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {

                $product = \App\Product::findOrFail($request->id);

                $cartItem = Cart::add([
                     'id' => $product->id,
                     'name' => $product->name,
                     'qty' => 1,
                     'price' => $product->price,
                     "weight" => "5",
                 ]);
            
                 Cart::associate($cartItem->rowId, 'App\Product');
                 return redirect()->route('cart');
            }
        }
    }
