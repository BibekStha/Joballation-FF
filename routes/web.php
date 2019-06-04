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

Route::get('/', function () {
  return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

// Google authentication
Route::get('google', function () {
  return view('googleAuth');
});

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

// End of Google authentication


// Dashboard Routes
Route::get('/dashboard', function () {
  return view('dashboard.home');
});

Route::get('/compare', function () {
  return view('dashboard.compare');
});

Route::get('/application', function () {
  return view('application.home');
});

