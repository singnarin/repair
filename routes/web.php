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

Route::any('/', 'SiteController@index');
Route::any('form/{id?}', 'RepairController@form');
Route::get('loginForm', 'SiteController@loginForm');
Route::post('login', 'SiteController@login');
Route::get('logout', 'SiteController@logout');
Route::any('daySearch', 'SiteController@daySearch');
Route::any('Report', 'ReportController@report');
