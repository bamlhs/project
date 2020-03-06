<?php

namespace App\Http\Controllers;
use App\HomeService;
use Illuminate\Http\Request;
use Aimeos\Shop\Facades\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
public function BeforeANdAfter(){

    return view('files.before');

}
public function Gallery(){

    return \View::make('files.gallery');

}


public function Instagram(){

    return view('files.instagram');

}

}