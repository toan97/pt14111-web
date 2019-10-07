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
Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function () {
	$users = User::all();
	foreach ($users as $user) {
		$user->posts;
	}
    return view('users',compact('users'));
});
Route::get('posts', function () {
	$posts = factory(App\Models\Post::class,10)->make();
    return view('posts',compact('posts'));
});
Route::view('posts/create','posts/create')->name('posts.create');
Route::post('posts/store',function (Request $req)
{
	$data = $req->all();
	User::create([
		'name' => $data['name'],
		'email' => $data['email'],
		'password' => bcrypt('123456')
	]);
	return redirect()->route('post');
});
