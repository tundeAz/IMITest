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
//post to contact ->allowing 1 request per min
Route::group(['contact' => 'api', 'middleware' => 'throttle:1,60'], function () {
    Route::get('contact','ContactFormController@create');
    Route::post('contact','ContactFormController@store');
});