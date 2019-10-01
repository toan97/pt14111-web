@extends('layouts')
@section('title','sdfsdfsd')
@section('content')
	<table class="table table-bordered table-hover table-dark">
	  <thead>
	    <tr>
	      <th scope="col">Name</th>
	      <th scope="col">BirthDay</th>
	      <th scope="col">Phone_number</th>
	      <th scope="col">Email</th>
	    </tr>
	  </thead>
	  <tbody>
    	@foreach ($users as $us)
    		<tr>
		      {{-- <th scope="row">{{ $us->id }}</th> --}}
		      <td>{{ $us->name }}</td>
		      <td>{{ $us->birth_day }}</td>
		      <td>{{ $us->email }}</td>
		      <td>{{ $us->phone_number }}</td>
		    </tr>
    	@endforeach
	  </tbody>
	</table>
@endsection