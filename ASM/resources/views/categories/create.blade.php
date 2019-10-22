@extends('layouts');
@section('content')
	<form action="{{ route('categories.store') }}" method="POST" class="col-sm-8 col-sm-offset-2">
		@csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" id="name" name="name">
	  </div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection