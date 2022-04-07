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
    return view('landingpage');    
});

Route::get('/login', function () {
    return view('login');    
});

Route::get('/rooms', function () {
    return view('rooms');    
});

Route::get('/buknow', function () {
    return view('partials.buknow');    
});

Route::get('/admin', function () {
    return view('layouts.main_admin');    
});



