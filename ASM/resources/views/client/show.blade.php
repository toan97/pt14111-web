<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-sm-6 offset-3 mt-5">
		<form action="{{ route('client.update') }}" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
		    @error('name')
				<p style="color: red"><i>{{ $message }}</i></p>
	    	@enderror
		  </div>

		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
		    @error('name')
				<p style="color: red"><i>{{ $message }}</i></p>
		    @enderror
		  </div>

		  <div class="form-group">
		    <label for="birthday">BirthDay:</label>
		    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ Auth::user()->birthday }}">
		    @error('name')
				<p style="color: red"><i>{{ $message }}</i></p>
		    @enderror
		  </div>

		  <div class="form-group">
		    <label for="phone_number">Phone_number:</label>
		    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ Auth::user()->phone_number }}">
		    @error('name')
				<p style="color: red"><i>{{ $message }}</i></p>
		    @enderror
		  </div>

		  <button class="btn btn-success" type="submit">Update</button>

		</form>
	</div>
</body>
</html>