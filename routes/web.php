<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@user');
Route::get('/', 'WelcomeController@index');

Route::post('/postprofile', 'ProfileController@create');
Route::get('/getjobs', 'JobController@index');
Route::post('/postjob', 'JobController@create');
Route::get('/showjob/{id}', 'JobController@show');
Route::get('/editjob/{id}', 'JobController@edit');
Route::put('/updatejob/{id}', 'JobController@update');
Route::delete('/deletejob/{id}', 'JobController@destroy');
