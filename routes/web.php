<?php

Route::get('/', 'PagesController@home');
Route::get('/research', 'PagesController@research');
Route::get('/current_members', 'PagesController@current');
Route::get('/past_members', 'PagesController@past');
Route::get('/contact', 'PagesController@contact');
