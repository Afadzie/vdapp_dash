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

// registration emial verification route
Auth::routes(['verify' => true]);


Route::get('/', function () {
    return view('auth/login');
});


Route::get('/register', function(){

    return view('register');
});

Route::resource('api/vdapp', 'visitorsController');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'dashboard@index');

Route::get('/home/exportexcel', 'dashboard@excel');
Route::get('/home/pdf', 'dashboard@pdf');

Route::get('/users', 'dashboard@getusers');


