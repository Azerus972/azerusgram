<?php

/*
|--------------------------------------------------------------------------
| AzerusGram by Azerus
|--------------------------------------------------------------------------
|
|Author : https://www.kmarous.fr
|Mail : developer@mybestplace.fr
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Profile route*/
Route::get('/profiles/{user}', 'ProfileController@show')->name('profiles.show');

/*Posts routes*/
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
