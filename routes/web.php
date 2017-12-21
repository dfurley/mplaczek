<?php

Route::get('/', 'PagesController@home')->name('home');
Route::get('/research', 'PagesController@research');
Route::get('/contact', 'PagesController@contact');

Route::get('/papers', 'PapersController@index');
Route::get('/papers/upload', 'PapersController@create');
Route::post('/papers', 'PapersController@store');
Route::get('/papers/edit/{paper}', 'PapersController@edit');
Route::patch('/papers/{paper}', 'PapersController@update');
Route::get('/deletepaper/{paper}', 'PapersController@destroy');

Route::get('/FVAkC2jDFu', 'RegistrationController@create');
Route::post('/FVAkC2jDFu', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/staff/current', 'StaffController@current');
Route::get('/staff/past', 'StaffController@past');
Route::get('staff/create', 'StaffController@create');
Route::post('staff', 'StaffController@store');