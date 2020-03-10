<?php

$count = null;
$price = null;
$names = null;
foreach(Cart::content() as $item){
    $count .= $item->qty ;
    $price .=( $item->price * $item->qty);
    $names .= $item->name ;

}

$paytabs->create_pay_page(
    array(
        "site_url"=>"http://127.0.0.1:8000",
        "return_url"=>"http://127.0.0.1:8000/gateway",
        "title"=>$order->name,
        "cc_first_name"=>$order->name,
        "cc_last_name"=>"Doe",
        "cc_phone_number"=>"00966",
        "phone_number"=>$order->phone,
        "reference_no"=>$order->id,
        "unit_price"=>$price,
        "quantity"=>$count,
        "other_charges"=>($shipping + $newTax),
        "amount"=>$total,
        "currency"=>"SAR",
        "discount"=>$discount,
        "billing_address"=>"$order->street",
        "city"=>"$order->city",
        "state"=>"$order->province",
        "state_shipping"=>"$order->province",
        "city_shipping"=>"$order->city",
        "country_shipping"=>"SAU",
        "cms_with_version"=>"6",
        "msg_lang"=>"{{( \App::getlocale()=='en') ? 'Arabic' : 'English'",
        "postal_code"=>"12345",
        "country"=>"SAU",
        "shipping_first_name"=>"John",
        "shipping_last_name"=>"Doe",
        "address_shipping"=>"$order->city",
        "products_per_title"=>"$names",
        "postal_code_shipping"=>"12345",
        "email"=>"amirani2s@gm.com",
        
        )); 
 