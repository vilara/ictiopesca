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

Auth::routes();

Route::get('/', function(){
    return view('auth.login');
});

// Login personlizado
Route::get('/cadastroUsuario', 'AuthController@formCadastro');
Route::post('/loginPessoal', 'AuthController@authenticate');
Route::post('/logoutt', 'AuthController@logout')->name('logoutt');

    
Route::resource('photos', 'PhotoController');
Route::resource('usuarios', 'UsersController');
Route::resource('profiles', 'ProfilesController');


Route::get('/home', 'HomeController@index')->name('home');
    



Route::get('/usuario/profile/{id}', 'ProfilesController@createProfile');
