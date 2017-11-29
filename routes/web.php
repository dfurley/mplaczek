<?php

Route::get('/', 'PagesController@home');
Route::get('/research', 'PagesController@research');
Route::get('/current_members', 'PagesController@current');
Route::get('/past_members', 'PagesController@past');
Route::get('/contact', 'PagesController@contact');

Route::get('/papers', 'PapersController@index');
Route::get('/papers/upload', 'PapersController@create');
Route::post('/papers', 'PapersController@store');
