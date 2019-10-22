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
use App\Models\User;
use Illuminate\Http\Request;


// Route Group
Route::group(['prefix' => 'users','as' => 'users.'],function (){

	Route::get('/','UserController@index')->name('index');

	Route::get('create','UserController@create')->name('create');

	Route::post('users','UserController@store')->name('store');

	Route::get('{id}/edit','UserController@edit')->name('edit');

	Route::post('update/{id}','UserController@update')->name('update');

	Route::post('{id}','UserController@destroy')->name('destroy');


	Route::get('{id}/show','UserController@show')->name('show');
});


// Route::view('login','auth.login');


Route::get('login','AuthController@getLoginForm')->name('auth.login_form');

Route::post('login','AuthController@login')->name('auth.login');