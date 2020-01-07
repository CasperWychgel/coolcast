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

Route::get('/home','ProductController@index')->name('home');
Route::get('/','ProductController@notify')->name('notify');
Route::get('/products/add','ProductController@create')->name('add');
Route::get('/products/{id}/edit','ProductController@edit');
Route::post('/products/add','ProductController@store');
Route::post('/products/{id}/edit','ProductController@update');
Route::delete('/deleteall','ProductController@deleteall')->name('deleteall');

Route::get('/locations', 'LocationController@index')->name('locations');
Route::get('/locations/{id}/show', 'LocationController@show');
Route::get('locations/add', 'LocationController@create')->name('addLocation');
Route::post('locations/add', 'LocationController@store');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
