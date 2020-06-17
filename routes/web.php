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

Route::get('/name', function() {
    $myName = app()->make('myName');
    return $myName;
});

// checkAge middleware のテスト
Route::get('age', 'AgeController@index');
Route::post('age/post', 'AgeController@post')->middleware('checkAge')->name('age.post');

Route::get('/show', 'UserController@show');

Route::get('/edit/{id}', 'ProfileController@index')->name('edit');

///// Authテスト /////
Route::match(['get', 'post'], 'test/menu', 'Test\MenuController@menu');
Route::match(['get', 'post'], 'test/search', 'Test\MenuController@search')->name('search');
Route::match(['get', 'post'], 'test/update', 'Test\MenuController@update')->name('update');
Route::match(['get', 'post'], 'test/complete', 'Test\MenuController@complete')->name('complete');
///// Authテスト /////

///// キャッシュテスト /////
Route::get('storeCache', 'UserController@storeCache');
Route::get('showCache', 'UserController@showCache');
///// キャッシュテスト /////

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
