<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{

    protected $table = "product_option";
    public $timestamps = false;
    
    public function product(){
        return $this->belongsTo("App\Product");
    }

    public function productDetails(){
        return $this->belongsTo("App\ProductDetails");
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'orders_product_option' , "option_id", "order_id");
    }

}