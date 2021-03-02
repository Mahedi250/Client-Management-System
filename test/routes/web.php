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
Route::get('/', 'HomeController@home');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

//Route::get('/home', 'HomeController@index');
Route::get('/home', ['uses'=>'HomeController@index']);

Route::get('/home/create', 'HomeController@create');
Route::post('/home/create', 'HomeController@store');
Route::get('/home/userlist', 'HomeController@userlist');



Route::get('/home/edit/{id}', 'HomeController@edit');
Route::post('/home/edit/{id}', 'HomeController@update');

Route::get('/home/delete/{id}', 'HomeController@destroy');
//Route::post('/home/delete/{id}', 'HomeController@destroy');

route::get('/alllogin','AllLoginController@index')->name('login');
route::post('/alllogin','AllLoginController@varify');
route::get('/signup', 'registraion@index');
route::post('/signup', 'registraion@store');

