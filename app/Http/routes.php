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

Route::get('hello', function () {
    return 'Hello World!';
});

Route::get('ckeditor', function () {
    return view('ckeditor');
});

Route::group(['prefix' => 'bootstrap2', 'controller' => 'Bootstrap2Controller'], function () {
    Route::get('/', function() {
        return view('default-bootstrap2');
    });

    Route::get('/ckeditor', function () {
        return view('ckeditor');
    });
});

Route::group(['prefix' => 'bootstrap3', 'controller' => 'Bootstrap3Controller'], function () {
    Route::get('/', function() {
        return view('default-bootstrap3');
    });

    Route::get('/ckeditor', function () {
        return view('ckeditor');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return 'Dashboard';
    });
});