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
    return view('welcome');
});

// ------ Admin ------- //
// Dashboard
Route::resource('/admin', 'adminController');

// Logo Index
Route::get('/admin-logo', 'logoController@index');
// Logo Insert
Route::get('/logo/insert', function ()  {
  return view ('admin.logo_insert');
});
// Logo Post
Route::post('insertLogo', 'logoController@insert');
// Logo Get
Route::get('/get/{id_logo}', ['uses' => 'logoController@get']);
// Logo Update
Route::post('/updateLogo', ['uses' => 'logoController@update']);
// Logo Delete
Route::get('/delete/{id_logo}', ['uses' => 'logoController@delete']);

// Navigation Index
Route::get('/admin-navigation', 'navigationController@index');
// Logo Insert
Route::get('/navigation/insert', function ()  {
  return view ('admin.navigation_insert');
});
// Navigation Post
Route::post('insertNavigation', 'navigationController@insert');
// Navigation Get
Route::get('/get/{id_logo}', ['uses' => 'navigationController@get']);
// Navigation Update
Route::post('/updateNavigation', ['uses' => 'navigationController@update']);
// Navigation Delete
Route::get('/delete/{id_logo}', ['uses' => 'navigationController@delete']);

// Profile Index
Route::get('/admin-profile', 'profileController@index');
// Logo Insert
Route::get('/logo/insert', function ()  {
  return view ('admin.logo_insert');
});
// Logo Post
Route::post('insertLogo', 'logoController@insert');
// Logo Get
Route::get('/get/{id_logo}', ['uses' => 'logoController@get']);
// Logo Update
Route::post('/updateLogo', ['uses' => 'logoController@update']);
// Logo Delete
Route::get('/delete/{id_logo}', ['uses' => 'logoController@delete']);

// ------ Homepage ------- //
// Index
Route::resource('/homepage', 'homepageController');