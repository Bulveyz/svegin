<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::resource('threads', 'ThreadController');
Route::get('threads/{channel}/{thread}', 'ThreadController@show');
Route::post('threads/reply/{thread}', 'ThreadController@reply');

