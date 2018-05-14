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



Route::get('/overview', function () {

    $chats = [
        'Brandon',
        'Rik',
        'Dennis',
        'Lesley'
    ];




    return view('overview', compact('chats'));
});

Route::get('/createbutton', function () {
    return view('createbutton');
});

Route::get('/chat', function () {
    return view('chat');
});
Route::get('/contactUS', function () {
    return view('create');

});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'AboutUsController@index');
Route::get('/faq', 'FAQController@index');

//route voor het displayen van het profiel van de ingelogde gebruiker
Route::get('/profile/{id}', 'HomeController@show');

//route voor het aanpassen van de info in het profiel
Route::get('/profile/{id}/edit', 'HomeController@edit');
Route::post('/profiel/{id}/edit',  array('uses' => 'HomeController@update', 'as' => 'edit.profile'));

//route om de accoutn te verwijderen uit de database
Route::get('/profile/{id}/delete', 'HomeController@delete');

Route::delete('/deleted/{id}', array('uses' => 'HomeController@deleted', 'as' => 'delete.profile'));


Route::resource('skilllevels', 'SkillLevelsController');
