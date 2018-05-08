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

Route::resource('skilllevels', 'SkillLevelsController');
