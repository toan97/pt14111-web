@extends('layouts')
@section('content')
	<form class="col-sm-8 col-sm-offset-2">
		@csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
	  </div>

	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
	  </div>

	  <div class="form-group">
	    <label for="birthday">BirthDay:</label>
	    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
	  </div>

	  <div class="form-group">
	    <label for="phone_number">Phone_number:</label>
	    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $user->phone_number }}">
	  </div>

	</form>
@endsection