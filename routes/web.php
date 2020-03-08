<?php
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', "HomeController@index")->name("/");
// Authentication Routes...
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/feature', 'MainController@feature')->name('feature');

Route::get('/service', 'ServiceController@laundries')->name('laundry');
Route::get('/service/hotels', 'ServiceController@hotels')->name('hotels');
Route::get('/service/home', 'ServiceController@home')->name('home');
Route::get('/service/tools', 'ServiceController@tools')->name('tools');
Route::get('/service/home/book', 'ServiceController@book')->name('book');
Route::post('/service/home/Store', 'ServiceController@StoreHome')->name('StoreHome');
Route::get('/home-services', 'ServiceController@GetHomeService')->name('services');
Route::get('/beforeandafter', 'PagesController@BeforeAndAfter')->name('before');
Route::get('/instagram', 'PagesController@Instagram')->name('insta');
Route::get('/gallery', 'PagesController@Gallery')->name('gallery');

Route::get('/shop', "ShopController@index")->name("shop");
Route::post('/store', "ServiceController@StoreHome")->name("StoreHome");
Route::get('/cart', "CartController@index")->name("cart");
Route::patch('/cart-qty/{id}', "CartController@changeQuantity")->name("qty");

Route::post('/addtocart', "CartController@add")->name("addtocart");
Route::get('/checkout', "CheckoutController@index")->name("checkout");
Route::post('/payment', "CheckoutController@payment")->name("payment");
Route::post('/purchase', "CheckoutController@purchase")->name("purchase");
Route::post('/gateway', "CheckoutController@gateway")->name("gateway");
Route::get('/confirm', "CheckoutController@confirm")->name("confirm");

Route::post('/add_coupon', "CouponController@store")->name("add_coupon");

Route::get('/profile', "UserController@index")->name("profile");
Route::get('/orders', "UserController@orders")->name("orders");
Route::post('/save-profile', "UserController@store")->name("sprofile");

Route::get('/product/{id}', "ShopController@product")->name("single");
Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/paytabs_payment', function () {
    $pt = Paytabs::getInstance("amiranis2012@gmail.com", "gMa3YRRsruaesOmWkBKRwB696vasLx12kb5i3WKurVIUK4Q4GBWcc2mixwLj4MloYrH2oswPneJ8jAcZb8cnayGI5s29enxdOffc");
	$result = $pt->create_pay_page(array(
		"merchant_email" => "amiranis2012@gmail.com",
		'secret_key' => "gMa3YRRsruaesOmWkBKRwB696vasLx12kb5i3WKurVIUK4Q4GBWcc2mixwLj4MloYrH2oswPneJ8jAcZb8cnayGI5s29enxdOffc",
		'title' => "John Doe",
		'cc_first_name' => "John",
		'cc_last_name' => "Doe",
		'email' => "customer@email.com",
		'cc_phone_number' => "973",
		'phone_number' => "33333333",
		'billing_address' => "Juffair, Manama, Bahrain",
		'city' => "Manama",
		'state' => "Capital",
		'postal_code' => "97300",
		'country' => "BHR",
		'address_shipping' => "Juffair, Manama, Bahrain",
		'city_shipping' => "Manama",
		'state_shipping' => "Capital",
		'postal_code_shipping' => "97300",
		'country_shipping' => "BHR",
		"products_per_title"=> "Mobile Phone",
		'currency' => "BHD",
		"unit_price"=> "10",
		'quantity' => "1",
		'other_charges' => "0",
		'amount' => "10.00",
		'discount'=>"0",
		"msg_lang" => "english",
		"reference_no" => "1231231",
		"site_url" => "https://your-site.com",
		'return_url' => "https://www.mystore.com/paytabs_api/result.php",
		"cms_with_version" => "API USING PHP",
    ));
});