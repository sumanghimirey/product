<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login',['as'=>'loginUser','uses'=>'UserController@login']);
Route::post('/register',['as'=>'userSave','uses'=>'UserController@userSave']);
Route::post('/login',['as'=>'postLogin','uses'=>'UserController@postLogin']);
Route::get('/',['as'=>'products','uses'=>'ProductController@index']);



Route::group(['middleware'=>['auth']],function(){
    Route::get('/product/create',['as'=>'productCreate','uses'=>'ProductController@create']);
    Route::post('/product/create',['as'=>'saveProduct','uses'=>'ProductController@store']);
    Route::get('/logout',['as'=>'logout','uses'=>'UserController@logout']);
    Route::get('productShow/{id}',['as'=>'productList','uses'=>'ProductController@show']);
});
