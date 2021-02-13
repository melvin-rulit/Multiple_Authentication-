<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['admin']], function () {

    // Show form
    Route::get('login-admin', 'AdminPanel\LoginController@Form')->name('showView-Login-in-AdminPanel');
    Route::get('/register-admin', 'AdminPanel\RegisterController@getViewRegister')->name('showView-Register-in-AdminPanel');

    // Send form
    Route::post('/login-in-admin', 'AdminPanel\LoginController@Datasend')->name('login-in-adminpanel');

    Route::post('/register-in-admin', 'AdminPanel\RegisterController@Datasend')->name('register-in-adminpanel');
    Route::post('/logout-admin','AdminPanel\LoginController@logout')->name('logout-admin');
      Route::get('/fuck','AdminPanel\FuckController@index')->middleware('adminpanel')->name('fuck');
    Route::get('/adminka', 'AdminPanel\FuckController@gold')->name('adminka')
    ;
});


