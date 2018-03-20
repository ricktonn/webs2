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

Route::get('loginpage', function () {
    return view('login');
});

Route::post('login',[
    'uses' => 'UserController@login',
    'as' => 'login'
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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('logout', 'UserController@logout');
