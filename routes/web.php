<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('posts-index');

Route::get('/post/create', 'LoggedController@create') -> name('post-create');
Route::post('/post/create', 'LoggedController@store') -> name('post-store');

Route::get('/post/delete/{id}', 'LoggedController@delete') -> name('post-delete');

Route::get('/post/edit/{id}', 'LoggedController@edit') -> name('post-edit');
Route::post('/post/edit/{id}', 'LoggedController@update') -> name('post-update');


Route::get('/post/{id}', 'GuestController@show') -> name('post-show');
