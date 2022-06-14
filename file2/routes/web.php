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

/*
 Продемонструвати роботу з моделями, а саме:
-щоб в бд були такі сутності між якими буде встановлений
зв’язок 1 до багатьох та багато до багатьох
-hasMany
-belongsToMany
-побудувати відповідні рути та контролери, які дозволять
вам мати навігацію на сайті
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search/{search}', function ($search) {
    return view('search', ['photos' => DB::table('some_tab1')->where('name', 'like', "%$search%")->orderby('id')->get()]);
});

Route::get('/company', 'App\Http\Controllers\BaseController@company');

Route::get('/company/{name}/{hns}', 'App\Http\Controllers\BaseController@create');

Route::get('/subdivision/{id}/workers', 'App\Http\Controllers\BaseController@getWorkers');

Route::get('nn_connect/{id}', 'App\Http\Controllers\BaseController@connectNToN');
