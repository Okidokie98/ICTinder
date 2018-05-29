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


Route::resource('/threads', 'ThreadController');

Route::get('/contactUS', function () {
    return view('create');
});

Auth::routes();


//ChatControllers
Route::get('/chats', 'ChatController@index');
Route::Post('/createchat', 'ChatController@store');
Route::get('/createchat', 'ChatController@create');
Route::get('/chats/{chat}', 'ChatController@show');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'AboutUsController@index');
Route::get('/faq', 'FAQController@index');

//route voor het displayen van het profiel van de ingelogde gebruiker
Route::get('/profile/{id}', 'HomeController@show');




//route voor het aanpassen van de info in het profiel
Route::get('/profile/{id}/edit', 'HomeController@edit');
Route::post('/profile/{id}/edit',  array('uses' => 'HomeController@update', 'as' => 'edit.profile'));

//route om de accoutn te verwijderen uit de database
Route::get('/profile/{id}/delete', 'HomeController@delete');

Route::get('/findmatch', 'matchesController@create');
Route::post('/findmatch', array('uses' => 'matchesController@store', 'as' => 'finding.match'));

Route::delete('/deleted/{id}', array('uses' => 'HomeController@deleted', 'as' => 'delete.profile'));


Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');


// Creates routes for the skills functions .
Route::resource('/skills', 'SkillsController');

Route::resource('skilllevels', 'SkillLevelsController');

