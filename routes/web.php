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
Route::any('/our-vision','App\Http\Controllers\HomeController@ourVision');
Route::any('/contact-us','App\Http\Controllers\HomeController@contactUs');
Route::any('/submit','App\Http\Controllers\HomeController@enquirySubmit');


//Exam Section
Route::any('/exams','App\Http\Controllers\ExamController@index');
Route::any('/ioqm-rmo-inmo','App\Http\Controllers\ExamController@ioqmRmoInmo');
Route::any('/smo','App\Http\Controllers\ExamController@smo');
Route::any('/amc-aime','App\Http\Controllers\ExamController@amcAime');
Route::any('/isi-cmi','App\Http\Controllers\ExamController@isiCmi');

// our Team section
Route::any('/our-team','App\Http\Controllers\OurTeamController@index');
Route::any('/team-details','App\Http\Controllers\OurTeamController@teamDetails');
