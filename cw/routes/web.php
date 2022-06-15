<?php

use App\Models\Account;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

//Route::get('/some', function () {
//    $order_ids = Account::get('id');
//    $i=0;
//    foreach ($order_ids as $oi) {
//        $arr[$i] = $oi;
//        $i++;
//    }
//    $account_id = end($arr);
//    return view('some', ['order_ids' => $order_ids, 'account_id' => $account_id]);
//});
