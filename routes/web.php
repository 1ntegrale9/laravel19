<?php

Auth::routes();
Route::get('/', 'PostsController@index')->name('top');
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']])->middleware('auth');
Route::resource('comments', 'CommentsController', ['only' => ['store']])->middleware('auth');
