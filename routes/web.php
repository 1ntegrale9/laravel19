<?php

Route::get('/', 'PostsController@index')->name('top');
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);
Route::resource('comments', 'CommentsController', ['only' => ['store']]);
