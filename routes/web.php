<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/createchat', function () {
    return view('createchat');
});


Route::get('/contactUS', function () {
    return view('create');

});

Auth::routes();

Route::get('/chats', 'ChatController@index');
//Route::get('/createchat', 'ChatController@store');
Route::get('/chats/{chat}', 'ChatController@show');



Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/contact', 'ContactController');

Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');