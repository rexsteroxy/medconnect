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
//Route::get('/joblistings', 'PagesController@getJobListingPage');
Route::get('/contact', 'PagesController@getContactPage');
Route::get('/admin', 'PagesController@getAdminDashBoard');


Auth::routes();
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/home', 'HomeController@index')->name('home');
    Route::prefix('admin')->group(function(){
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    });
