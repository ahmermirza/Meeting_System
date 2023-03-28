<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Meeting Resource Routes

// Route::middle
Route::get('/meetings', 'MeetingController@list')->name('meetings');
Route::get('/meetings/create', 'MeetingController@create')->name('meetings.create');
Route::post('/meetings/insert', 'MeetingController@insert')->name('meetings.create.insert');
Route::get('/meetings/{meeting}', 'MeetingController@get')->name('meetings.get');
Route::post('/meetings/update', 'MeetingController@update')->name('meetings.update');
Route::delete('/meeting/delete/{meeting}', 'MeetingController@destroy')->name('meetings.delete');
