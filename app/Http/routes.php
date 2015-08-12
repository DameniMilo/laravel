<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('template-selector');
});

Route::group(['prefix' => 'bootstrap2'], function () {
    Route::get('/', function() {
        return view('bootstrap2.default');
    });

    Route::get('/ckeditor', function () {
        return view('bootstrap2.partial.ckeditor');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', function () {
            return 'Dashboard';
        });
    });
});

Route::group(['prefix' => 'bootstrap3'], function () {
    Route::get('/', function() {
        return view('bootstrap3.default');
    });

    Route::get('/ckeditor', function () {
        return view('bootstrap3.partial.ckeditor');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', function () {
            return 'Dashboard';
        });
    });
});
