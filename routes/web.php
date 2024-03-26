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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function() 
{
return view('login');
});
Route::get('/signup',function() 
{
return view('signup');
});
Route::get('/register',function() 
{
return view('register');

});

Route::get('/product',function() 
{
return view('product');
});



Route::get('/s',function() 
{
return view('s');
});
Route::get('home', 'HomeController@index');
Route::get('product/{id}', 'ProductController@show')->name('product.show');