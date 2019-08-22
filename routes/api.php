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
// Magazine Routes
Route::get('magazine','MagazineApiController@index');
Route::get('magazine/{id}','MagazineApiController@show');
Route::post('magazine/create','MagazineApiController@store');
Route::put('magazine/update/{id}','MagazineApiController@update');
Route::delete('magazine/delete/{id}','MagazineApiController@destroy');

// End Magazine Routes

// Magazine Collection Routes
//Route::get('collection','MagazineCollectionApiController@index');