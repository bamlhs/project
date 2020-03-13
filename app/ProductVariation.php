<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    protected $table = "product_variations";
    public $timestamps = false;
 
    public function products(){
        return $this->belongsTo("App\Product");
    }

}
