<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionDetails extends Model
{
    public function productOption(){
        return $this->hasOne("App\ProductOption");
    }



    // public function orders()
    // {
    //     return $this->belongsToMany('App\Order', 'orders_products' , "product_id", "order_id");
    // }
}
