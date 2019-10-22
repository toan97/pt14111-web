@extends('layouts');
@section('content')
	<form action="{{ route('users.create') }}" method="POST" class="col-sm-8 col-sm-offset-2">
		@csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" id="name" name="name">
	  </div>

	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email">
	  </div>

	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd" name="password">
	  </div>

	  <div class="form-group">
	    <label for="birthday">BirthDay:</label>
	    <input type="date" class="form-control" id="birthday" name="birthday">
	  </div>

	  <div class="form-group">
	    <label for="phone_number">Phone_number:</label>
	    <input type="text" class="form-control" id="phone_number" name="phone_number">
	  </div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection