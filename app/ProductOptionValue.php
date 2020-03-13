<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    protected $table = "product_option_values";
    public $timestamps = false;
 
    public function productOption(){
        return $this->belongsTo("App\ProductOption");
    }

  
}
