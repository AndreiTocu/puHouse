<?php

use \App\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/Pubs', 'PubController@lists');
Route::get('/Pubs/{Pub}', 'PubController@showPub');
Route::post('', 'ReviewController@store')->name("reviews.store")->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
