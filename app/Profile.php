<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    public $timestamps = false;

    protected $fillable = ['name', 'phone', 'gender', 'birth-date', 'province', 'city', 'block', 'street', 'place-extra','user_id'];

    public function user(){
        return $this->belongsTo("App\User");
    }
}
