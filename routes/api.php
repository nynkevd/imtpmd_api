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

Route::middleware('auth:api')->get('/allmedication', 'MedicationController@getAllMedication');
Route::middleware('auth:api')->get('/medicationname/{id}', 'MedicationController@getMedicationName');
Route::middleware('auth:api')->get('/medicationinfo/{name}', 'MedicationController@getMedicationInfoByName');
Route::middleware('auth:api')->get('/medicationcount', 'MedicationController@getMedicationCount');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
