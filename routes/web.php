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

//Routes for the getting the whole web pages on view root folder
Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAboutPage');
Route::get('/joblistings', 'PagesController@getJobListingPage');
Route::get('/contact', 'PagesController@getContactPage');
Route::get('/admin', 'PagesController@getAdminDashBoard');

