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

// Validators
Validator::extend('checkCurrentPassword', 'CustomValidation@checkCurrentPassword');

// Patterns
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');  

// Home
Route::get('/', ['as' => 'home', 'uses' => 'Frontend\HomeController@index']);

// Auth
Route::get('login',             ['as' => 'auth.login',              'uses' => 'Frontend\AuthController@login']);
Route::post('postLogin',        ['as' => 'auth.login.post',         'uses' => 'Frontend\AuthController@postLogin']);
Route::get('logout',            ['as' => 'auth.logout',             'uses' => 'Frontend\AuthController@logout']);
Route::get('register',          ['as' => 'auth.register',           'uses' => 'Frontend\AuthController@register']);
Route::post('postRegister',     ['as' => 'auth.register.post',      'uses' => 'Frontend\AuthController@postRegister']);
Route::get('register-success',  ['as' => 'auth.register.success',   'uses' => 'Frontend\AuthController@registerSuccess']);

// Dashboard
Route::get('dashboard',         ['as' => 'dashboard',           'uses' => 'Frontend\DashboardController@index']);

// Profile
Route::get('account/profile',           ['as' => 'account.profile',         'uses' => 'Frontend\AccountController@profile']);
Route::post('account/updateSummary',    ['as' => 'account.update.summary',  'uses' => 'Frontend\AccountController@updateSummary']);
Route::post('account/updateBasic',      ['as' => 'account.update.basic',    'uses' => 'Frontend\AccountController@updateBasic']);
Route::post('account/updateContact',    ['as' => 'account.update.contact',  'uses' => 'Frontend\AccountController@updateContact']);
Route::post('account/updatePassword',   ['as' => 'account.update.password', 'uses' => 'Frontend\AccountController@updatePassword']);