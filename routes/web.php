<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::resource('threads', 'ThreadController');
Route::get('threads/{channel}/{thread}', 'ThreadController@show');
Route::post('threads/reply/{thread}', 'ThreadController@reply');

Route::get('donat', 'DonatController@index');

Route::get('faq', 'FaqController@index');

Route::resource('feed', 'FeedController');
Route::get('/', 'FeedController@index');
Route::post('feed/reply/{feed}', 'FeedController@reply');

Route::get('profile/{user}', 'ProfileController@show');
Route::post('profile/avatar/{user}', 'ProfileController@avatar');



