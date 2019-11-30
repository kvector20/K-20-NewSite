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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form',
[
    'uses' => 'FromController@index',
    'as' => 'form'
]);

Route::post('/insert',
[
    'uses' => 'FromController@store',
    'as' => 'insert'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/EventRegisteration.php',function()
{
    return redirect('https://plus6500.kvectorfoundation.com/');
});