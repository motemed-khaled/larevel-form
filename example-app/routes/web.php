<?php

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

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;



Route::get("/", function () {
    return view('welcome');
});

Route::get("/shimaa",function(){


    return view('motemed');

});

Route::get("/login" , function(){

    return view("ahmed");

});



