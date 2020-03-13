<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;
    
    public function productOptions(){
        return $this->hasMany("App\ProductOption");
    }

    public function productvariations(){
        return $this->hasMany("App\ProductVariation");
    }


    public function orders()
    {
        return $this->belongsToMany('App\Order', 'orders_products' , "product_id", "order_id");
    }
}
