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
Route::get('/admin', 'WelcomeController@admin');

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

Route::get('/admin', 'AdminController@admin');
Route::get('/admin/allusers', 'AdminController@allUsers');
Route::get('/admin/alljobs', 'AdminController@allJobs');

Route::get('/admin/alljobseekers', 'AdminController@allJobSeekers');
Route::get('/admin/allemployers', 'AdminController@allEmployers');

Route::get('/admin/allcontactmails', 'AdminController@allContactMails');
Route::get('/admin/alljobmails', 'AdminController@allJobMails');

Route::get('/admin/adminprofile', 'AdminController@adminProfile');

//JobSeeker
// Route::post('postseekerprofile', 'SeekerProfileController@create');

// Route::get('showseeker/{id}', 'SeekerProfile@show');
// Route::get('editseeker/{id}', 'SeekerProfile@edit');
// Route::put('updateseeker/{id}', 'SeekerProfile@update');
// Route::delete('deleteseeker/{id}', 'SeekerProfile@destroy');

//Jobs
// Route::get('jobindex', 'JobController@index');
// Route::post('postjob', 'JobController@create');
// Route::get('showjob/{id}', 'JobController@show');
// Route::get('editjob/{id}', 'JobController@edit');
// Route::put('updatejob/{id}', 'JobController@update');
// Route::delete('deletejob/{id}', 'JobController@destroy');




// Employer
// Route::post('create_empprofile', 'EmpProfileController@create');
// Route::get('show_empprofile/{id}', 'EmpProfileController@show');
// Route::get('edit_empprofile/{id}', 'EmpProfileController@edit');
// Route::put('update_empprofile/{id}', 'EmpProfileController@update');
// Route::delete('delete_empprofile/{id}', 'EmpProfileController@destroy');

//
