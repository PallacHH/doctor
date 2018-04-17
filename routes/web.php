<?php

Route::get('/city', 'CityController@create')->name('city.create');
Route::post('/city', 'CityController@store')->name('city.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
