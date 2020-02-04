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

Route::get('/', 'WelcomeController@show')->name('welcome');

Route::post('newsletter/signup', 'NewsletterController@store');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('logout', 'Auth\LoginController@showLoginForm')->name('logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('log    in', 'Auth\LoginController@login');

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index');
    Route::get('meetings/create', 'MeetingController@create');
    Route::post('meetings', 'MeetingController@store');
});

Route::get('meetings/{id}', 'MeetingController@show')->name('meetings.show');
