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
					<th colspan="4" class="text-center"><a href="{{ route('users.create') }}" class="btn btn-success ">Add New</a></th>
				</thead>
				<tbody>
					@foreach ($users as $u)
						<tr>
							<td>{{ $u->name }}</td>
							<td>{{ $u->email }}</td>
							<td>{{ $u->phone_number }}</td>
							<td>{{ $u->address }}</td>
							<td>{{ $u->posts->count() }}</td>
							<td><a href="{{ route('users.edit',['id'=>$u->id]) }}" class="btn btn-primary">Update</a></td>
							<td><a href="{{ route('users.show',['id'=>$u->id]) }}" class="btn btn-primary">Show</a></td>
							<td>
								<form id="form_delete{{ $u->id }}" action="{{ route('users.destroy',['id' => $u->id]) }}" method="POST">
								@csrf
								<button onclick="delete_alert({{ $u->id }})" type="button" class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
@endsection
@section('alert')
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
			function delete_alert(id) {
				swal("Bạn có chắc chắn muốn xóa?")
				.then((value) => {
					if (value) {
						$('#form_delete'+id).submit();
					}
			});
		};
	</script>
@endsection