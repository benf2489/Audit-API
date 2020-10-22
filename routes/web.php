<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain('connected.silverfin.com')->group(function () {
    Route::get('/', function () {
        return 'Silverfin domain connected.';
    });

    Route::get('/response/pdf/{form_id}/{response_id}', function ($form,$id) {

        $path = public_path() . '/response/'.$form.'/'.$id.'.pdf';

        if(file_exists($path)) {
          return response()->file(public_path() . '/response/'.$form.'/'.$id.'.pdf');
        } else {
          abort(404);
        }

    });


});


Route::get('/clear-cache', function() {
   $exitCode = Artisan::call('cache:clear');
   return 'Cache cleared';
});



// Route::get('/', function () {
//     return view('welcome');
// });
//
//
// Route::get('todos', 'TodosController@index');
//
//
// Route::get('todos/{todo}', 'TodosController@show');


//Decibel Web Route
Route::domain("results.decibel.com")->group(function(){

    Route::get('/', function () {
        return 'Decible connect';
    });

    Route::get('digitalexp/{response_id}','ResponseController@deciblechartpdf',function($id){

        $path = public_path().'/result/'.$id.'.pdf';
        if(file_exists($path)){
            return response()->file($path);
        }else{
            abort(404);
        }

    });

});
