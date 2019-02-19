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


Route::post ('register', 'UsersController@register');


Route::post ('login', 'UsersController@login');


Route::apiResource('places', 'PlacesController');


Route::post('updatePlace', 'PlacesController@updatePlace');


Route::post('deletePlace', 'PlacesController@deletePlace');


Route::apiResource('users', 'UsersController');

Route::post ('loginAdmin', 'LoginAdminController@loginAdmin');




Route::post('deleteUser', 'UsersController@deleteUser');

Route::post('updateUser', 'UsersController@updateUser');








