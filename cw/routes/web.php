<?php

use App\Models\Account;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Order;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('website1/index');
});

Route::get('/news', function () {
    return view('website1/news');
});

Route::get('/products', function () {
    return view('website1/products');
});

Route::get('/article1', function () {
    return view('website1/article1');
});

Route::post('/congrats',
    'App\Http\Controllers\BaseController@congrats');

Route::get('/registration', function () {
    return view('website1/registration');
});

Route::get('/mobile1', function () {
    return view('website1/mobile1');
});

Route::get('/mobile2', function () {
    return view('website1/mobile2');
});

Route::get('/mobile3', function () {
    return view('website1/mobile3');
});

Route::get('/mobile4', function () {
    return view('website1/mobile4');
});

Route::post('/m_congrats', 'App\Http\Controllers\BaseController@m_congrats');

Route::get('/m_registration', function () {
    return view('website1/m_registration');
});

Route::get('/for_myself/{order_id}/{account_id}/{product_id}', function ($order_id, $account_id, $product_id, $name) {
    $account = Account::find($account_id);
    $account_orders = Account::find($account_id)->orders;
    $products = Product::get();
    $product_orders = Product::find($product_id)->orders;
    return view('for_myself', ['account'=>$account, 'account_orders'=>$account_orders,
        'products'=>$products, 'product_id'=>$product_id,'product_orders'=>$product_orders]);
});

Route::get('/for_myself/{name}', function ($name) {
    $account_id = Account::where('name', 'like', $name)->get('id')[0]; // searching for account id using name
    $account_orders = Account::find($account_id['id'])->orders; // account orders
    return view('for_myself', ['account'=>$account_orders]);
});
