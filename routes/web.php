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

Route::get('/profiles/{user}', 'ProfileController@show')->name('profiles.show');
