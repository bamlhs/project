<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
public function user(){
    return $this->belongsTo('App\User');
}

public function productOption()
{
    return $this->belongsToMany('App\ProductOption', "orders_product_option", "order_id" , "option_id");
}

}
