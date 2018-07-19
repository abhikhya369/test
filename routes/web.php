<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Guru Randhawa: MADE IN INDIA | Bhushan Kumar | DirectorGifty | Elnaaz Norouzi | Vee
|fficial Video: Raat Kamaal Hai | Guru Randhawa & Khushali Kumar | Tulsi Kumar | New Song 2018
|Na Ja (Official Video) Pav Dharia | SOLO | New Punjabi Songs 2018 | White Hill mb_substitute_character()
|Arjun Kanungo, Momina Mustehsan - Aaya Na Tu
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/','HomeController@index');//temperary for production
Route::get('/home', 'HomeController@index')->name('home'); //temperary for devlopemnt
//Route::get('/user', 'UserController@index')->name('home');
//Route::controller('portfolio','PortfolioController');
Route::get('user/create', 'UserController@create');
Route::resource('/user', 'UserController');
