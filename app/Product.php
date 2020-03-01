<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function productOptions(){
        return $this->hasMany("App\ProductOption");
    }


    // public function orders()
    // {
    //     return $this->belongsToMany('App\Order', 'orders_products' , "product_id", "order_id");
    // }
}
