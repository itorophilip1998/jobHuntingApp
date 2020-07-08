<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('postprofile', 'ProfileController@create');
Route::get('jobindex', 'JobController@index');
Route::post('postjob', 'JobController@create');
Route::get('showjob/{id}', 'JobController@show');
Route::get('editjob/{id}', 'JobController@edit');
Route::post('updatejob/{id}', 'JobController@update');
Route::post('deletejob/{id}', 'JobController@destroy');

