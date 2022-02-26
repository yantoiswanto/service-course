<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
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

Route::controller(MentorController::class)->group(function () {
    Route::get('/mentors', 'index');
    Route::get('/mentors/{id}', 'show');
    Route::post('/mentors', 'store');
    Route::put('/mentors/{id}', 'update');
    Route::delete('/mentors/{id}', 'destroy');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/courses', 'index');
    Route::get('/courses/{id}', 'show');
    Route::post('/courses', 'store');
    Route::put('/courses/{id}', 'update');
    Route::delete('/courses/{id}', 'destroy');
});

// Route::get('mentors', 'App\Http\Controllers\MentorsController@index');
// Route::get('mentors/{id}', 'App\Http\Controllers\MentorsController@show');
// Route::post('mentors', 'App\Http\Controllers\MentorsController@store');
// Route::put('mentors/{id}', 'App\Http\Controllers\MentorsController@update');
