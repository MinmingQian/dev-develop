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

Route::get('/', function () {
    return view('home');
});


/** added by joe for apartment add fuction */
Route::post('apartments/submit', 'ApartmentsController@store');
Route::get('apartments/add','ApartmentsController@create');




Route::get('apartments/{id}', 'ApartmentsController@show');

Route::get('search', 'ApartmentsController@search');
Route::get('rooms', 'RoomsController@index');
Route::get('payment', 'OrdersController@payment');
Route::get('profile', 'UsersController@profile');


/* other functions */
Route::get('holder', function() {return view('layouts.holder');});
Route::get('online', function() {return view('layouts.online');});
Route::get('roommate', function() {return view('layouts.roommate');});
Route::get('about', function() {return view('layouts.about');});

