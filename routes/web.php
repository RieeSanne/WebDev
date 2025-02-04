<?php

use Illuminate\Support\Facades\Route;

Route::get(uri:'/', action: "App\Http\Controllers\LoginController@index"); 
Route::get(uri:'/profile', action: "App\Http\Controllers\ProfileController@viewProfile");
Route::get(uri:'/profile/api', action: "App\Http\Controllers\ProfileController@index");
Route::get(uri:'/login', action: "App\Http\Controllers\ProfileController@index");
Route::get(uri:'/computer', action: "App\Http\Controllers\ProfileController@index");

