<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['admin']], function () {

    Route::post('/login-in-admin', 'AdminPanel\LoginController@Datasend')->name('logininadminpanel');
    Route::post('/logout-admin','AdminPanel\LoginController@logout')->name('logout-admin');
      Route::get('/fuck','AdminPanel\FuckController@index')->middleware('adminpanel')->name('fuck');
    Route::get('/adminka', 'AdminPanel\FuckController@gold')->name('adminka');
    Route::get('/login-admin', 'AdminPanel\LoginController@Form')->name('showView-Login-in-AdminPanel');
});


