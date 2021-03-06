@extends('layouts')
@section('content')
	<form action="{{ route('posts.store') }}" method="POST" class="col-sm-8 col-md-offset-2">
		@csrf
	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name="title">
	    @error('title')
	    	<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	   <div class="form-group">
	    <label for="content">Content:</label>
	    <input type="text" class="form-control" id="content" name="content">
	    @error('content')
	    	<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <div class="form-group">
	    <label for="category">Category:</label>
	    <select class="form-control" id="category" name="category_id">
	    	@foreach ($categories as $category)
	    		<option value="{{ $category->id }}">{{ $category->name }}</option>
	    	@endforeach
	    </select>
	    @error('category')
	    	<p style="color: red"><i>{{ $message }}</i></p>
	    @enderror
	  </div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection