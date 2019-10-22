@extends('layouts')
@section('title','user')
@section('content')
	@if (empty($users))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>Name</th>
					<th>Birthday</th>
					<th>Email</th>
					<th>Phone number</th>
					<th>Role</th>
					<th>Categories</th>
					<th>Post</th>
					<th>Is_active</th>
					<th colspan="4" class="text-center"><a href="{{ route('users.create') }}" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($users as $user)
						<tr>
							<td><a href="{{ route('users.show',['id'=> $user->id]) }}">{{ $user->name }}</a></td>
							<td>{{ $user->birthday }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->phone_number }}</td>
							<td>
								{{ $user->role==1?'User':'Admin' }}
							</td>
							<td>{{ $user->categories->count() }}</td>
							<td>{{ $user->posts->count() }}</td>
							<td>
								<select>
									<option>Is_active</option>
									<option>In_active</option>
								</select>
							</td>
							<td><a href="{{ route('users.edit',['id'=> $user->id]) }}" class="btn btn-primary">Update</a></td>
							<td>
								<form id="form_delete{{ $user->id }}" action="" method="POST">
									@csrf
								</form>
							</td>
							<td><a href="" class="btn btn-danger">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection