<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{

    protected $table = "tax";
    public $timestamps = false;

    protected $fillable = ['tax_value'];

    
}
