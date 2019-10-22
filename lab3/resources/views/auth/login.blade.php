@extends('layouts')
@section('content')
	<form action="{{ route('auth.login_form') }}" method="POST" class="col-sm-8 col-sm-offset-2">
		@csrf

	    @empty(session('field'))
	    	<h1 style="color: red">Đăng nhập không thành công</h1>
	    @endempty
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Vui lòng nhập Email...">
	  </div>

	  <div class="form-group">
	    <label for="password">Password:</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Vui lòng nhập tên...">
	  </div>

	  <div class="form-group">
	    <button type="submit" class="btn btn-primary">Submit</button>
	  </div>
	</form>
@endsection