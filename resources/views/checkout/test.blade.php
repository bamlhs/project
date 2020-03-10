<?php


$count = null;
$price = null;

foreach(Cart::content() as $item){
    $count .= $item->qty . " | ";
    $price .=( $item->price * $item->qty). " | ";

}
?>

tax:  {{ $tax }} <br>
discount: {{ $discount }}<br>
newSubtotal: {{ $newSubtotal }}<br>
newTax: {{ $newTax }} <br>
total: {{ $total }}<br>
Cart Total: {{Cart::total()}}<br>
shipping: {{ $shipping }} <br>

count: {{ $count }}<br>
price: {{$price}} <br>