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



//route voor de chat functie

Route::get('/chats', 'ChatController@index');
Route::Post('/createchat', 'ChatController@store');
Route::get('/createchat', 'ChatController@create');
Route::get('/chats/{chat}', 'ChatController@show');


//route voor

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'AboutUsController@index');
Route::get('/faq', 'FAQController@index');

//route voor het displayen van het profiel van de ingelogde gebruiker
Route::get('/profile/{id}', 'HomeController@show');



//route voor het aanpassen van de info in het profiel
Route::get('/profile/{id}/edit', 'HomeController@edit');
Route::post('/profile/{id}/edit',  array('uses' => 'HomeController@update', 'as' => 'edit.profile'));


//route om de account te verwijderen uit de database
Route::get('/profile/{id}/delete', 'HomeController@delete');
Route::delete('/deleted/{id}', array('uses' => 'HomeController@deleted', 'as' => 'delete.profile'));

//matching routes
Route::get('/findmatch/{id}', 'matchesController@create');
Route::post('/findmatch/{id}', 'matchesController@store')->name('findmatch.store');
Route::get('/matches/{id}', 'matchesController@show')->name('match.show');
Route::delete('/deletematch/{id}', array('uses' => 'matchesController@destroy', 'as' => 'delete.match'));


Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');


// Creates routes for the skills functions .
Route::resource('/skills', 'SkillsController');


Route::resource('skilllevels', 'SkillLevelsController');

// routes voor de verschillende FAQ pages
Route::get('/faq-privacy', 'FAQController@indexprivacy');
Route::get('/faq-generalinfo', 'FAQController@indexgeneralinfo');
Route::get('/faq-interactions', 'FAQController@indexinteractions');

