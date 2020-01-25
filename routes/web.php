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
    return view('main/main');
    //return redirect()->route('userView');
});

Route::get('/participants','FromController@thirdRec');

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

Route::get('/home/magazine',
[
    'uses' => 'MagazineController@index',
    'as' => 'CreateMagazine'
])->middleware('auth');
Route::post('/home/magazine/save',
[
    'uses' => 'MagazineController@store',
    'as' => 'StoreMagazine'
])->middleware('auth');

Route::get('/k20-magazine',
[
    'uses' => 'MagazineController@user_view',
    'as' => 'userView'
]);
Route::get('/topic/{id}',
[
    'uses'=> 'MagazineController@show',
    'as' => 'topic'
]);