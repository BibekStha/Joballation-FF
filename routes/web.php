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
  if (Auth::check()) {
    return redirect()->action('ApplicationController@index');
  }
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
Route::get('/dashboard', 'ApplicationController@index');
Route::post('/dashboard/applications/filter', 'ApplicationController@filter');
Route::post('/dashboard/applications/compare', 'ApplicationController@compare');
Route::get('/dashboard/applications/{application}/delete', 'ApplicationController@deleteForm');
Route::post('/dashboard/applications/url', 'ApplicationController@getURL');
Route::post('/dashboard/applications/favourite', 'ApplicationController@favourite');
Route::resource('dashboard/applications', 'ApplicationController');
