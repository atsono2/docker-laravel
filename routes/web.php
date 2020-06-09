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
    // EncryptionServiceProviderでencrypterという名前で登録している
    // $encrypt = app()->make('encrypter');
    // $pass = $encrypt->encrypt('password');
    // dd($pass);
    return view('welcome');
});

Route::get('/test', function() {
    dd(Auth::id());
    return 12345;
});

Route::get('/name', function() {
    $myName = app()->make('myName');
    return $myName;
});

Route::get('/show', 'UserController@show');

Route::get('/edit/{id}', 'ProfileController@index')->name('edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
