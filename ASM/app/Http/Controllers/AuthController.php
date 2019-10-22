<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AuthController extends Controller
{
	use AuthenticatesUsers;
    public function showLoginForm()
    {
    	return view('auth.login');
    }
    public function login(Request $request)
    {
    	if ($this->attemptLogin($request)) {
    		return redirect()->route('users.index');
    	}else{
    		return redirect()->route('auth.showLoginForm');
    	}
    }
}
