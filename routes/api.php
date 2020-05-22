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

// Display responses from all audits
Route::get('responses','ResponseController@index');

// Display responses from audit
Route::get('responses/{typeform_id}','ResponseController@formShow');

// Display single response from audit
Route::get('response/{response_id}','ResponseController@show');
Route::get('response/pdf/{response_id}/{lang}','ResponseController@pdf');


// Store new response
Route::post('response','ResponseController@store');

// Update a response
Route::put('response','ResponseController@store');

// Delete a response
Route::delete('response/{response_id}','ResponseController@destroy');
