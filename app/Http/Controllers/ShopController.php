<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
        
    public function index(){

        $products = \App\Product::all();
        return View("shop.shop", ["products" => $products]);
    }

    public function product($id){

        $product = \App\Product::find($id);

        return View("shop.product", ["product" => $product]);
    }
    
    public function store(){
        return View("shop.shop");
    }

  

}
