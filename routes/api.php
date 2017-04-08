<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('pole/new', 'PoleController@NewPole');
Route::get('pole', 'PoleController@GetAll');

Route::post('location/new', 'LocationController@NewLocation');
Route::get('location', 'LocationController@GetAll');

Route::post('speed/new', 'SpeedController@NewSpeed');
Route::get('speed', 'SpeedController@GetAll');
