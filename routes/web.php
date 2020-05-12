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

//Pub Controller
Route::get('/Pubs', 'PubController@lists');
Route::get('/Pubs/{Pub}', 'PubController@showPub');
// Review
Route::post('', 'ReviewController@store')->name("reviews.store")->middleware('auth');
Route::get('DeleteReview/{reviewId}', 'ReviewController@delete')->middleware('auth');

//UserController
Route::get('/User', 'UserController@show')->name('UserProfile')->middleware('auth');
Route::get('/UpdateUser', function () {
  return view('Users.user-profile-update');
}) ->name('UserProfileUpdate')->middleware('auth');

Route::post('UpdateUser', 'UserController@update')->name('UserUpdate')->middleware('auth');
Route::get('DeleteUser', 'UserController@delete')->name('UserDelete')->middleware('auth');

// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
