<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UsersController');
Route::get('/usuario/profile/{id}', 'ProfilesController@createProfile');
Route::resource('/profiles', 'ProfilesController');
Route::resource('photos', 'PhotoController');
Route::resource('posts', 'PostController');
Route::get('/rolers-permissions', 'HomeController@update');