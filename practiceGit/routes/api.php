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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/getusers', 'usersAPI@getUsers');
Route::get('/getspecific_user/{user_id}', 'usersAPI@getSpecific_user');
Route::post('/createuser', 'usersAPI@createUser');
Route::put('/updatespecific_user/{user_id}', 'usersAPI@updateSpecific_user');
Route::delete('/deletespecific_user/{user_id}', 'usersAPI@deleteSpecific_user');

