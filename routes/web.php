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

Route::get("/","homeController@index");
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
Route::get('/DetailsLap1',function() 
{
return view('DetailsLap1');
});
Route::get('/DetailsLap2',function() 
{
return view('DetailsLap2');
});
Route::get('/DetailsLap3',function() 
{
return view('DetailsLap3');
});
Route::get('/DetailsLap4',function() 
{
return view('DetailsLap4');
});
Route::get('/DetailsLap5',function() 
{
return view('DetailsLap5');
});
Route::get('/DetailsLap6',function() 
{
return view('DetailsLap6');
});
Route::get('/DetailsLap7',function() 
{
return view('DetailsLap7');
});
Route::get('/DetailsLap8',function() 
{
return view('DetailsLap8');
});




Route::get('/s',function() 
{
return view('s');
});

