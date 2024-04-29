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
Route::get('dashboard', 'dashboardController@index');
Route::get('addItem', "addItemController@index")->name("addItem");
Route::get('/login', function () {
    if(Auth::check()){
        return redirect()->route('home');
    }
    else{
        return view('login');
    }
    
})->name('login');

Route::get('/signup', function () {
    if(Auth::check()){
        return redirect()->route('home');
    }
    else{
    return view('signup');
    }
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
Route::get('/logout', 'LoginRegisterController@logout')->name('logout');
Route::get('modal',function () {
    return view('modal');
})->name('modal');