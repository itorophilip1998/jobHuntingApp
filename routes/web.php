<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@user');
Route::get('/', 'WelcomeController@index');
Route::get('/adminuser', 'WelcomeController@getadmin');

Route::post('/postprofile', 'ProfileController@create');
Route::get('/getjobs', 'JobController@index');
Route::post('/postjob', 'JobController@create');
Route::get('/showjob/{id}', 'JobController@show');
Route::get('/editjob/{id}', 'JobController@edit');
Route::put('/updatejob/{id}', 'JobController@update');
Route::delete('/deletejob/{id}', 'JobController@destroy');
Route::post('/contactmail', 'ContactMailController@contactus');
Route::get('/sendmail', 'ContactMailController@index');
Route::post('/jobcv', 'JobMailController@jobcv');
Route::get('/jobemail', 'JobMailController@index');

// Admin
Route::get('/adminuser', 'AdminController@admin');
Route::get('/admin/allusers', 'AdminController@allUsers');
Route::get('/admin/alljobs', 'AdminController@allJobs');
Route::get('/admin/alljobseekers', 'AdminController@allJobSeekers');
Route::get('/admin/allemployers', 'AdminController@allEmployers');
Route::get('/admin/allcontactmails', 'AdminController@allContactMails');
Route::get('/admin/alljobmails', 'AdminController@allJobMails');
Route::get('/admin/adminprofile', 'AdminController@adminProfile');
Route::delete('/admin/deleteuser/{id}', 'AdminController@deleteuser');
Route::delete('/admin/deletecontactus/{id}', 'AdminController@deletecontactus');
Route::put('/admin/changepassword/{id}', 'AdminController@changepassword');
