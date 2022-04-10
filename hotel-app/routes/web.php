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

Route::get('/order', function () {
    return view('order');    
});

Route::get('/admin', function () {
    return view('admin.dashboard_admin');    
});

Route::get('/rooms_admin', function () {
    return view('admin.rooms_admin');    
});

Route::get('/detailrooms', function () {
    return view('admin.detailrooms');    
});

Route::get('/facilities_admin', function () {
    return view('admin.facilities_admin');    
});

Route::get('/receptionist', function () {
    return view('receptionist.dashboard');    
});

Route::get('/order_recep', function () {
    return view('receptionist.order_recep');    
});

Route::get('/order_ongoing', function () {
    return view('receptionist.order_ongoing');    
});

Route::get('/order_history', function () {
    return view('receptionist.order_history');    
});

Route::get('/addrooms', function () {
    return view('admin.addrooms');    
});

Route::get('/adddetails', function () {
    return view('admin.adddetails');    
});

Route::get('/addfacilities', function () {
    return view('admin.addfacilities');    
});



