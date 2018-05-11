<?php

use Illuminate\Http\Request;

// this apiv2.php doesn't require auth.
// for testing purpose temporarily

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

//Route::middleware('auth:api')->get('/test', function(Request $request) {
//  return 'test';
//});


Route::get('/', function() {
  return 'API Version 2';
});

Route::post('auth', 'UserController@auth');
Route::get('products/init', 'ProductController@init');
Route::resource('products', 'ProductController');
Route::resource('meeting_rooms', 'MeetingRoomController');
Route::resource('meetings', 'MeetingController');
Route::get('users/init', 'UserController@init');
