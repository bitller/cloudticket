<?php

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function() {
    Route::get('/', 'IndexController@index');
});