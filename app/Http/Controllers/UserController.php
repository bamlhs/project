<?php

namespace App\Http\Controllers;

use App\Order;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $profile = Profile::where("user_id", Auth::id())->first();
        return View("profile", ["profile" => $profile]);
    }

    public function store(Request $request){
     

         Validator::make($request->all(), [
            'name' => 'required|max:100',
            'phone' => 'required|phone:sa',
            'gender' => 'required|integer|between:0,1',
            'birthdate' => 'required',
            'province' => 'required',
            'city' => 'required',
            'block' => 'required',
            'street' => 'required',
        ])->validate();

        Profile::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birth-date' => $request->birthdate,
            'province' =>$request->province,
            'city' => $request->city,
            'block' => $request->block,
            'street' => $request->street,
            'place_extra' =>  $request->place_extra,
            'user_id' => Auth::id(),
        ]);

     return redirect()->route('profile');
        
    }

    public function orders(){

        $products = DB::table('orders')->where('user_id', Auth::id())
        ->join('orders_products', 'orders.id', '=', 'orders_products.order_id')
        ->join('products', 'orders_products.product_id', '=', 'products.id')
        ->select('orders.id as orderID', 'products.*', 'orders_products.quantity')
        ->get();

       return View("orders", ["products" => $products]);
    }
}
