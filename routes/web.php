<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/','HomeController@index');//temperary for production
//Route::get('/home', 'HomeController@index')->name('hom'); //temperary for devlopemnt
//Route::get('/user', 'UserController@index')->name('home');
//Route::controller('portfolio','PortfolioController');
Route::get('user/create', 'UserController@create');
//Route::resource('/userUpload', 'UserController@uploadImage');
Route::resource('/user', 'UserController');
Route::resource('/userUpload', 'UploadFileController');


