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
    return view('welcome');
});

Route::get('products/displaygrid', 'App\Http\Controllers\productController@displaygrid')->name('products.displaygrid');

Route::get('products/additem/{id}', 'App\Http\Controllers\productController@additem')->name('products.additem');

//Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('scorders', App\Http\Controllers\scorderController::class);


Route::resource('orderdetails', App\Http\Controllers\orderdetailController::class);
