<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
        return View("shop.shop", ["products" => $products]);
    }

    public function product($id){

        $products = DB::table("product_variations")->where('product_variations.product_id', $id)
        ->join("products", 'product_variations.product_id', '=', 'products.id')
        ->select('*', "product_variations.id as variationsID")
        ->get();

       // dd($products);

       if(count($products)<1){
           return redirect()->route("shop");
       }
        return View("shop.product", ["products" => $products]);
    }
    
    public function store(){
        return View("shop.shop");
    }
}
