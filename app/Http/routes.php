<?php

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/movies', 'MoviesController@index');
    Route::get('/halls', 'HallsController@index');
    Route::get('/cashiers', 'CashiersController@index');
    Route::get('/statistics', 'StatisticsController@index');
    Route::get('/account-settings', 'AccountSettingsController@index');
});
Route::auth();

Route::get('/home', 'HomeController@index');
