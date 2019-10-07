@extends('layouts')
@section('header')
@section('content')
	<form action="{{ route('posts.create') }}" @method('POST')>
		@csrf
	  <div class="form-group">
	    <label for="email">Name:</label>
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
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>

@endsection