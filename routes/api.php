<?php

use Illuminate\Http\Request;

Route::post('/login','UserController@login');
Route::post('/register','UserController@register');
Route::group(['middleware'=>'auth.jwt'],function(){
  
    Route::post('/logout','UserController@logout');
});

Route::get('/', function () {
    return 'mario';
});
