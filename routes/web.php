<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'Home\HomeController@index');

Route::get('/login', function () {
    return view('auth.login');
});



Route::group(['prefix' => 'home'], function () {
    Route::group(['as' => 'home'], function () {
        Route::get('', 'Home\HomeController@index')->name('.home');
    });
});


