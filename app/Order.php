<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Order extends Model
{
    
    protected $fillable = ['name', 'price', 'shipped', 'phone','billling_name_on_card','billling_tax', 'billling_discount', 'billling_total', 'billling_subtotal','province', 'city', 'block', 'street', 'place-extra', "payment_method" ,'user_id', 'billing_name_on_card'];



public function user(){
    return $this->belongsTo('App\User');
}

public function productOption()
{
    return $this->belongsToMany('App\ProductOption', "orders_product_option", "order_id" , "option_id")->withPivot("quantity");
}

}

