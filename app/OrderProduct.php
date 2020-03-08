<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class OrderProduct extends Model
{
    protected $table = 'orders_products';
    protected $fillable = ['product_id', 'order_id', 'quantity'];
    public $timestamps = false;

}
