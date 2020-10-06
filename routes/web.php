<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('posts-index');

Route::get('/post/delete/{id}', 'LoggedController@delete') -> name('post-delete');

Route::get('/post/{id}', 'GuestController@show') -> name('post-show');
