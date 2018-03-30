<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', 'TestController@index')->name('posts.index');
Route::get('/posts/details/{id}', 'TestController@details')->name('posts.details');
Route::get('/posts/add', 'TestController@add')->name('posts.add');
Route::post('/posts/insert', 'TestController@insert')->name('posts.insert');
Route::get('/posts/edit/{id}', 'TestController@edit')->name('posts.edit');
Route::post('/posts/update/{id}', 'TestController@update')->name('posts.update');
Route::get('/posts/delete/{id}', 'TestController@delete')->name('posts.delete');