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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/lecturer', 'LecturerController@index');

Route::get('/lecturer/position', 'LecturerController@positionList');

Route::get('/lecturer/subject', 'LecturerController@subjectList');

Route::get('/lecturer/research', 'LecturerController@researchList');

Route::get('/lecturer/changePassword', 'LecturerController@editPassword');

Route::post('/lecturer/updatePassword', 'LecturerController@updatePassword');
