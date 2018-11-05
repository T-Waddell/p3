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

Route::get('/', 'WelcomeController@index');
Route::get('/results', 'WelcomeController@calculate');

/* Static pages */
Route::view('/about', 'about');
Route::view('/contact', 'contact');


/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');