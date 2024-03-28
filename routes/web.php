<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", "homeController@index")->name('home');
Route::get('home', 'homeController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/s', function () {
    return view('s');
});

Route::get('/ForgotPassword', 'ForgotPasswordController@index')->name('ForgotPassword');
Route::get('product/{id}', 'ProductController@show')->name('product.show');

Route::post('/store', 'LoginRegisterController@store')->name('store');
Route::post('/authenticate', 'LoginRegisterController@authenticate')->name('authenticate');
Route::post('/logout', 'LoginRegisterController@logout')->name('logout');
