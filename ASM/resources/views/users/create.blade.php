@extends('layouts');
@section('content')
	<form action="{{ route('users.store') }}" method="POST" novalidate class="col-sm-8 col-sm-offset-2">
		@csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" id="name" name="name">
	    @error('name')
			<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email">
	    @error('email')
			<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd" name="password">
	    @error('password')
			<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <div class="form-group">
	    <label for="birthday">BirthDay:</label>
	    <input type="date" class="form-control" id="birthday" name="birthday">
	    @error('birthday')
			<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <div class="form-group">
	    <label for="phone_number">Phone_number:</label>
	    <input type="text" class="form-control" id="phone_number" name="phone_number">
	    @error('phone_number')
			<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection