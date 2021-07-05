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

Route::get('/', function () {
    return view('home');
});
Route::get('/platform', function () {
    return view('platform');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/contact', function () {
    return view('contact');
});
//contact controller:create a record and send to db
Route::get('contact','ContactFormController@create');
