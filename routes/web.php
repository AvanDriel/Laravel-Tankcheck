<?php
//view and change gasstations
Route::get('/', 'GasstationsController@index')->name('home');
Route::get('/home', 'GasstationsController@index');
Route::get('/add', 'GasstationsController@create');
Route::post('/add', 'GasstationsController@store');

//registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

//login/logout
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//admin pages
Route::get('/admin/users', 'AdminController@users');
Route::post('/admin/activity/{id}', 'AdminController@toggleActivity');
Route::post('/admin/users/search', 'AdminController@usersSearch');
Route::get('/admin/stations', 'AdminController@stations');

//account page
Route::get('/account', 'AccountController@index');

//price approving and changing
Route::get('/price/approve/{id}', 'PricesController@approve');
Route::get('/price/correct/{id}', 'PricesController@correct');
Route::post('/price/correct', 'PricesController@update');
Route::get('/thanks', 'PricesController@thanks');