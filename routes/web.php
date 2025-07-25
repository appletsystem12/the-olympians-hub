<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\OurTeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::any('/','App\Http\Controllers\HomeController@index');
Route::any('/about-us','App\Http\Controllers\HomeController@aboutUs');
Route::any('/contact-us','App\Http\Controllers\HomeController@contactUs');


//Exam Section
Route::any('/exams','App\Http\Controllers\ExamController@index');
Route::any('/ioqm','App\Http\Controllers\ExamController@ioqm');
Route::any('/nsea','App\Http\Controllers\ExamController@nsea');
Route::any('/nseb','App\Http\Controllers\ExamController@nseb');
Route::any('/nsec','App\Http\Controllers\ExamController@nsec');
Route::any('/nsejs','App\Http\Controllers\ExamController@nsejs');
Route::any('/nsep','App\Http\Controllers\ExamController@nsep');
Route::any('/nmtc-primary','App\Http\Controllers\ExamController@nmtcPrimary');
Route::any('/nmtc-sub-junior','App\Http\Controllers\ExamController@nmtcSubJunior');
Route::any('/nmtc-junior','App\Http\Controllers\ExamController@nmtcJunior');

// our Team section
Route::any('/our-team','App\Http\Controllers\OurTeamController@index');
Route::any('/team-details','App\Http\Controllers\OurTeamController@teamDetails');
