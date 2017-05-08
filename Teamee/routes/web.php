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

Route::get('/email', 'HomeController@email')->name('sendEmail');
Route::get('/receipt', 'HomeController@getReceipt')->name('sendOrderReceipt');

Route::get('/', function () {
    return view('homepage');
})->name('homepage');
Route::get('/tea', function () {
    return view('tea');
});
Route::get('/coffee', function () {
    return view('coffee');
});
Route::get('/snacks', function () {
    return view('snacks');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/contact1', function () {
    return view('contact');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::post('/subscribe', [
  'uses'=>'HomeController@postSubscribe',
  'as' =>'subscribe'
]);
Route::get('contact', [
  'uses' => 'HomeController@getContact',
  'as'   => 'contact'
]);
Route::post('contact', 'HomeController@postContact');

Route::get('/product', [
  'uses' => 'ProductController@getIndex',
  'as' => 'product.index',
]);
Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductController@getAddToCart',
  'as' => 'product.addToCart',
]);
Route::get('/reduce/{id}', [
  'uses' => 'ProductController@getReduceByOne',
  'as' => 'product.reduceByOne',
]);
Route::get('/remove/{id}', [
  'uses' => 'ProductController@getRemoveItem',
  'as' => 'product.remove',
]);
Route::get('/shopping-cart', [
  'uses' => 'ProductController@getCart',
  'as' => 'product.shoppingCart',
]);
Route::get('/checkout', [
  'uses' => 'ProductController@getCheckout',
  'as' => 'checkout',
]);
Route::post('/checkout', [
  'uses' => 'ProductController@postCheckout',
  'as' => 'checkout',
  'middleware' => 'auth'
]);

Auth::routes();

Route::get('/user-dashboard', 'HomeController@index');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
