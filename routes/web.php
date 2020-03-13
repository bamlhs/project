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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
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
Route::get('/service/home', 'ServiceController@home')->name('homeService');
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
Route::patch('/qty/{id}', "CartController@changeQuantity")->name("qty");
Route::delete('/product/delete/{id}', "CartController@remove")->name("delete-product");

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

Route::post('/store-contact', "ServiceController@contact")->name("contact");




 