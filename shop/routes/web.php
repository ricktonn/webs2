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

Route::get('/', function () {
    return view('home');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login',[
    'uses' => 'UserController@page',
    'as' => 'login'
]);

Route::post('loginfunction',[
    'uses' => 'UserController@login',
    'as' => 'loginfunction'
]);

Route::post('/register',[
    'uses' => 'UserController@insertRegister',
    'as' => 'register'
]);

Route::get('/starter', function () {
    return view('starter', ['name' => 'Starter sets']);
});

Route::get('/liquid', function () {
    return view('liquid');
});

//Route::get('/admin', 'ProductController@index');

Route::get('/admin', [
    "uses" => 'ProductController@index',
    "as" => '/admin',
    'middleware' => 'auth'
]);

Route::get('logout', 'UserController@logout');

Route::get('category/{category?}', [
    "uses" => 'CategoryController@show',
    "as" => 'category'
]);

Route::resource('products','ProductController');