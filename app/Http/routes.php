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
Route::group(['middleware'=>['auth']],function(){
    Route::get('/product',['as'=>'productList','uses'=>'ProductController@index']);
    Route::get('/logout',['as'=>'logout','uses'=>'UserController@logout']);


});
