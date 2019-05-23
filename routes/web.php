<?php

Auth::routes();
Route::get('/', 'VillagesController@index')->name('top');
Route::resource('villages', 'VillagesController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']])->middleware('auth');
Route::resource('comments', 'CommentsController', ['only' => ['store']])->middleware('auth');
