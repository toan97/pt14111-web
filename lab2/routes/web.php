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
    return view('welcome');
});
Route::get('users', function () {
	$users = factory(App\Models\User::class,11)->make();
    return view('users',compact('users'));
});
Route::get('posts', function () {
	$posts = factory(App\Models\Post::class,10)->make();
    return view('posts',compact('posts'));
});
