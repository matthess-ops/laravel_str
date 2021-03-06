<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/testrelations', 'TeststuffController@testRelations');


Route::get('/parser', 'Api\GoodreadsController@parser');
// Route::get('/testrel', 'TestrelController@index');
Route::get('books', 'LibraryController@index');


Route::get('/getaudio', [
    'as' => 'audio',
    'uses' => 'Api\AudioPlayerController@stream'
]);


// Route::get('/getaudio', 'AudioPlayerController@stream');

