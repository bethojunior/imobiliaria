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
        Route::get('', 'Admin\AdminController@index')->name('.home');
        Route::get('cities', 'CitiesController\CitiesController@index')->name('.cities');
        Route::get('neighborhood', 'Neighborhood\NeighborhoodController@index')->name('.neighborhood');
    });
});

Route::group(['prefix' => 'cities'], function () {
    Route::group(['as' => 'cities'], function () {
        Route::post('', 'CitiesController\CitiesController@create')->name('.create');
    });
});

Route::group(['prefix' => 'neighborhood'], function () {
    Route::group(['as' => 'neighborhood'], function () {
        Route::post('', 'Neighborhood\NeighborhoodController@create')->name('.create');
    });
});



