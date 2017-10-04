<?php

Route::get('/', 'GasstationsController@index')->name('home');
Route::get('/home', 'GasstationsController@index');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');