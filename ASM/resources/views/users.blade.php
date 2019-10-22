@extends('layouts')
@section('title','user')
@section('content')
	@if (empty($users))
		no-data
	@else
			<table class="table table-border table-hover">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Phone number</th>
					<th>Address</th>
					<th>Posts</th>
					<th colspan="4" class="text-center"><a href="" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($users as $u)
						<tr>
							<td>}}</td>
							<td> }}</td>
							<td>_number }}</td>
							<td>ss }}</td>
							<td>->count() }}</td>
							<td><a href="" class="btn btn-primary">Update</a></td>
							<td><a href="" class="btn btn-primary">Show</a></td>
							<td>
								<form id="form_delete" action="" method="POST">
								@csrf
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection