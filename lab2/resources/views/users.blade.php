@extends('layouts')
@section('title','user')
@section('content')
	@if (empty($users))
		no-data
	@else
			<table class="table table-hover">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Phone number</th>
					<th>Address</th>
				</thead>
				<tbody>
					@foreach ($users as $u)
						<tr>
							<td>{{ $u->name }}</td>
							<td>{{ $u->email }}</td>
							<td>{{ $u->phone_number }}</td>
							<td>{{ $u->address }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection