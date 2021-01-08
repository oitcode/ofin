<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return redirect('/dashboard');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return redirect('/dashboard');
});

/* Dashboard */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/* Product */
Route::get('/product', 'ProductController@index')->name('product');

/* Inventory */
Route::get('/inventory', 'InventoryController@index')->name('inventory');
