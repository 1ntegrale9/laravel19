<?php

Auth::routes();
Route::get('/', 'PostsController@index')->name('top');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('comments', 'CommentsController', ['only' => ['store']]);
