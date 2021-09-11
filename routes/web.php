<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\facades\DB;
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



Route::get('/', function()
{
    return view('FirstHome'); });


Route::get('register', function()
{
    return view('register'); });

Route::get('login', function()
{
    return view('login'); });

Route::get('about', function()
{
    return view('about'); });

Route::get('home1', function()
{
    return view('FirstHome'); });

Route::get('FirstHome', function()
{
    return view('FirstHome'); });


 //Auth::Routes();

 Route::group(['middleware' => 'auth'], function () {
   Route::post('/AdminPages.delete','ProductController@store')->middleware('admin');
   Route::get ("/deleteproduct/{id}","ProductController@delete")->middleware('admin');
   Route::get("UserPages.index","ProductController@InsertToDb")->middleware('Isuser');
   Route::get("/AddToCart/{ProdId}",'CartController@store')->middleware('Isuser');
   Route::get('/AdminPages.delete','ProductController@LoadDb')->middleware('admin') ;
   Route::get('/UserPages.viewcart','CartController@viewcart')->middleware('Isuser');
   Route::get ("/delete/{id}","CartController@delete")->middleware('Isuser');
   Route::get('UserPages.Index', function()
   {
       return view('UserPages.Index',['products'=>DB::select('select * from products')]); })->middleware('Isuser');
  Route::get('AdminPages/add_medicine', function()
       {
           return view('AdminPages/add_medicine'); })->middleware('admin');


});





// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
