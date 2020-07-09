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
Route::get('/', 'WelcomeController@index');

Route::post('postprofile', 'ProfileController@create');
Route::get('jobindex', 'JobController@index');
Route::post('postjob', 'JobController@create');
Route::get('showjob/{id}', 'JobController@show');
Route::get('editjob/{id}', 'JobController@edit');
Route::post('updatejob/{id}', 'JobController@update');
Route::post('deletejob/{id}', 'JobController@destroy');
Route::get('/sendmail', 'SendEmailController@send');
