<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// декілька рутів

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/hello', 'App\Http\Controllers\SomeController@hello');

// get запити з параметрами

Route::get('/number/{id}', 'App\Http\Controllers\SomeController@number');

Route::get('/letters/{alp}', 'App\Http\Controllers\SomeController@letters');

// post запити

Route::post('/congrats', 'App\Http\Controllers\SomeController@congrats');

Route::get('/join_us', 'App\Http\Controllers\SomeController@join_us');

Route::get('/user_profile', 'App\Http\Controllers\SomeController@user_profile');
