<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/seller', 'App\Http\Controllers\SellerController@index');
Route::post('/seller', 'App\Http\Controllers\SellerController@store');
Route::get('/seller/{seller_id}/sales', 'App\Http\Controllers\SellerController@sales');

Route::post('/sale', 'App\Http\Controllers\SaleController@store');