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

Route::get('/', 'HomeController@index');

Route::get('/contact-us', 'ContactUsController@index');

Route::post('/contact-us', 'ContactUsController@post');

Route::get('/about', 'AboutController@index');

Route::auth();

Route::get('/admin', 'AdminController@index');
