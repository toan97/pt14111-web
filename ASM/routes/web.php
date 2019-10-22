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
// route 
// Login
Route::get('login','AuthController@showLoginForm')->name('auth.showLoginForm');

Route::post('login','AuthController@login')->name('auth.login');





Route::group(['prefix' => 'posts','as' => 'posts.'], function() {

    Route::get('','PostController@index')->name('index');

	Route::get('/create','PostController@create')->name('create');

	Route::post('/create','PostController@store')->name('store');

	Route::get('/{id}/edit','PostController@edit')->name('edit');

	Route::post('/{id}/update','PostController@update')->name('update');

	Route::post('/{id}/delete','PostController@destroy')->name('destroy');
});
// Route::get('auth/login','LoginController')








// Route User
Route::group(['prefix' => 'users','as' => 'users.'], function() {
    
	Route::get('','UserController@index')->name('index');

	Route::get('/create','UserController@create')->name('create');

	Route::post('','UserController@store')->name('store');

	Route::get('/{id}/edit','UserController@edit')->name('edit');

	Route::post('/{id}/update','UserController@update')->name('update');

	Route::get('/{id}/show','UserController@show')->name('show');
});







// Route Categories
Route::group(['prefix' => 'categories','as' => 'categories.'], function() {
    
	Route::get('','CategoryController@index')->name('index');

	Route::get('/create','CategoryController@create')->name('create');

	Route::post('','CategoryController@store')->name('store');

	Route::get('/{id}/edit','CategoryController@edit')->name('edit');

	Route::post('/{id}/update','CategoryController@update')->name('update');

	Route::post('/{id}','CategoryController@destroy')->name('destroy');
});



// Route Comments
Route::get('comments','CommentController@index')->name('comments.index');


