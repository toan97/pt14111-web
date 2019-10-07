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
Route::get('/', function () {
    return view('welcome');
});
Route::get('users', function () {
	$users = User::all();
    return view('users',compact('users'));
})->name('users.index');

Route::get('users/create',function ()
{
	return view('users.create');
})->name('users.create');

Route::post('users',function (Request $req)
{
	$user = new User();
	$user->name = $req->name;
	$user->email = $req->email;
	$user->password = bcrypt($req->password);
	$user->phone_number = $req->phone_number;
	$user->address = $req->address;
	$user->birthday = $req->birthday;
	$user->save();
	return redirect()->route('users.index');
})->name('users.store');

Route::get('users/{id}/edit',function ($id)
{
	$user = User::find($id);
	return view('users.edit',compact('user'));
})->name('users.edit');

Route::post('users/update/{id}',function (Request $req,$id)
{
	$user = User::find($id);
	$user->name = $req->name;
	$user->email = $req->email;
	$user->password = bcrypt($req->password);
	$user->phone_number = $req->phone_number;
	$user->address = $req->address;
	$user->birthday = $req->birthday;
	$user->save();
	return redirect()->route('users.index');
})->name('users.update');

Route::post('users/{id}',function ($id)
{
	App\Models\Post::where('user_id',$id)->delete();
	User::destroy($id);
	return redirect()->route('users.index');
})->name('users.destroy');