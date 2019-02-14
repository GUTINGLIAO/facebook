<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'staticPageController@home')->name('home');
Route::get('/help', 'staticPageController@help')->name('help');
Route::get('/about', 'staticPageController@about')->name('about');
Route::get('/signup', 'userController@create')->name('signup');
Route::resource('users', 'userController');
Route::get('/login', 'sessionController@create')->name('login');
Route::post('/login', 'sessionController@store')->name('login');
Route::delete('/logout', 'sessionController@destroy')->name('logout');
Route::get('signup/confirm/{token}', 'userController@confirmEmail')->name('confirm_email');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');