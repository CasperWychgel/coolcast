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

Route::get('/','ProductController@index');
Route::get('/products/add','ProductController@create')->name('add');
Route::post('/products/add','ProductController@store');

Route::get('/locations', 'LocationController@index')->name('locations');
Route::get('/locations/{id}/show', 'LocationController@show');
Route::get('locations/add', 'LocationController@create');
Route::post('locations/add', 'LocationController@store');
