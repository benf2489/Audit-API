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

// Store new report pdf
Route::post('pdf','ResponseController@storePDF');


// Update a response
Route::put('response','ResponseController@store');

// Delete a response
Route::delete('response/{response_id}','ResponseController@destroy');

//Decibel Display PDF 
Route::get('response/digitalexp/{response_id}','ResponseController@deciblechartpdf');

//Decibel Store PDF
Route::get('digitalexp/storepdf/{id}','ResponseController@deciblestorePdf');

//S4RB Display PDF 
Route::get('response/s4rb/pdf/{response_id}/{lang}','ResponseController@s4rbPdf');

//6point6 Store PDF 
Route::post('6p6/pdf','ResponseController@point6PdfStore');

//6point6 Display PDF Stored File
Route::get('response/6p6/{response_id}','ResponseController@point6Display');

//6point6 Display PDF Inline
Route::get('response/6p6/pdf/{response_id}','ResponseController@point6Pdf');
